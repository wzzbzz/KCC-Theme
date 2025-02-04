<?php

namespace KCC;

class Group extends \jwc\Wordpress\WPPost
{

    public function name()
    {
        return $this->title();
    }

    public function addMember($user_id)
    {

        if ($this->userIsMember($user_id)) {
            return;
        }

        global $wpdb;

        $wpdb->insert(
            'users_groups',
            array(
                'group_id' => $this->id(),
                'user_id' => $user_id,
                'date_created' => current_time('mysql'),
                'date_modified' => current_time('mysql'),
            )
        );

        // check for error
        if ($wpdb->last_error) {
            pre($wpdb->last_error);
            die;
            return false;
        }

        return true;
    }

    public function removeMember($user_id)
    {

        if (!$this->userIsMember($user_id)) {
            return;
        }
        global $wpdb;
        $wpdb->delete(
            'users_groups',
            array(
                'group_id' => $this->id(),
                'user_id' => $user_id,
            )
        );


        // check for error
        if ($wpdb->last_error) {
            pre($wpdb->last_error);
            die;
            return false;
        }
        return true;
    }

    public function getMemberIds()
    {
        global $wpdb;
        $table = "users_groups";
        $sql = $wpdb->prepare(
            "SELECT user_id FROM {$table} WHERE group_id = %d",
            $this->id()
        );

        $results = $wpdb->get_results($sql);
        $members = [];
        foreach ($results as $result) {
            $members[] = $result->user_id;
        }

        return $members;
    }
    public function getMembers()
    {

        $members = [];
        foreach ($this->getMemberIds() as $member_id) {
            $members[] = new User($member_id);
        }

        return $members;
    }

    public function getLeader()
    {
        // leader is the post author
        return new User($this->author_id());
    }

    public function getGroupType()
    {
        return $this->meta('group_type');
    }



    public function currentUserIsLeader()
    {
        $user = wp_get_current_user();
        $user_id = $user->ID;

        return $this->getLeader()->id() == $user_id;
    }

    public function userIsMember($user_id)
    {

        global $wpdb;
        $table = "users_groups";
        $sql = $wpdb->prepare(
            "SELECT * FROM {$table} WHERE group_id = %d AND user_id = %d",
            $this->id(),
            $user_id
        );
        $results = $wpdb->get_results($sql);
        return count($results) > 0;
    }

    public function currentUserIsMember()
    {
        $user = wp_get_current_user();
        $user_id = $user->ID;
        return $this->userIsMember($user_id);
    }

    public function currentUserMembership()
    {

        if ($this->currentUserIsLeader()) {
            return 'leader';
        }
        if ($this->currentUserIsMember()) {
            return 'member';
        }
        return 'none';
    }

    public function userRequestAlreadySent($user_id)
    {
        global $wpdb;
        $sql = $wpdb->prepare(
            "SELECT * FROM group_invite WHERE group_id = %d AND invited_to = %d AND invited_from = %d AND status = 'pending' AND request_type = 'join_request'",
            $this->id(),
            $this->getLeader()->id(),
            $user_id
        );

        $result = $wpdb->get_results($sql);
        return count($result) > 0;
    }

    public function cancelUserJoinRequest($user_id)
    {
        if(!$this->userRequestAlreadySent($user_id)){
            return;
        }

        global $wpdb;
        $wpdb->delete(
            'group_invite',
            array(
                'group_id' => $this->id(),
                'invited_to' => $this->getLeader()->id(),
                'invited_from' => $user_id,
                'status' => 'pending',
                'request_type' => 'join_request'
            )
        );

        if($wpdb->last_error){
            pre($wpdb->last_error);
            die;
            return false;
        }
        return true;
    }

    public function sendUserJoinRequest($user_id)
    {
        global $wpdb;
        $insertData = array(
            'invited_to' => $this->getLeader()->id(),
            'invited_from' => $user_id,
            'status' => 'pending',
            'request_type' => 'join_request',
            'group_id' => $this->id()
        );
        $wpdb->insert('group_invite', $insertData);

        // send notification to user that their request was sent
        //$args = ['group_id' => $this->id(), 'user_id' => $user_id];
        //$notification = new \KCC\Notifications\ClosedGroupJoinRequestSentNotification($args);
        //$notification->send();

        // send notification to group leader that the join request was sent
        $args = ['group_id' => $this->id(), 'user_id' => $user_id];
        $notification = new \KCC\Notifications\ClosedGroupJoinRequestNotification($args);
        $notification->send();

        return true;
    }

    public function acceptUserRequest($user_id){
        $user_id = get_current_user_id();
        if($this->getLeader()->id() != $user_id){
            return;
        }
        global $wpdb;
        $wpdb->update(
            'group_invite',
            array(
                'status' => 'accepted'
            ),
            array(
                'group_id' => $this->id(),
                'invited_to' => $user_id,
                'invited_from' => $user_id,
                'status' => 'pending',
                'request_type' => 'join_request'
            )
        );

        if($wpdb->last_error){
            pre($wpdb->last_error);
            die;
            return false;
        }

        // send notificatoin to user that their request was accepted
        $args = ['group_id' => $this->id(), 'user_id' => $user_id];
        $notification = new \KCC\Notifications\ClosedGroupJoinRequestAcceptedNotification($args);
    }

    public function render_cell()
    {
?>
        <div class="group-cell <?php echo ($this->currentUserIsLeader()) ? " my-group-cell " : ""; ?> <?php echo ($this->currentUserIsMember()) ? " my-joined-group-cell " : ""; ?> col-lg-3">
            <div class="custom-card">

                <!--  <a href="javascript:void(0);" data-toggle="modal" data-target="#group-modal"> -->
                <div class="image">

                    <a href="<?php echo $this->permalink(); ?>">
                        <img src="<?php echo $this->thumbnail_url('medium') ?>" alt="" height="" title="" width="">
                    </a>
                    <div class="public-text">
                        <p>
                            <?php if ($this->getGroupType() == 'Close') { ?>
                                <?php echo 'Closed'; ?>
                            <?php } else {  ?>
                                <?php echo $this->getGroupType(); ?>
                            <?php } ?>
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="group-title">
                        <h4><?php echo $this->title() ?></h4>
                        <h6 class="mt-2" style="font-size:12px;"><?php echo date("m-d-Y", strtotime($this->date())); ?></h6>
                    </div>
                    <div class="total-member">
                        <p><?= count($this->getMembers());?> Members</p>
                    </div>
                </div>
                <div class="d-flex main-content  align-items-center">
                    <div class="left-text">
                        Manager
                    </div>
                    <div class="member-image">
                        <img src="<?= $this->getLeader()->user_avatar_url(); ?>" alt="<?= $this->name(); ?>">
                    </div>
                    <div class="right-text">
                        <?php echo $this->getLeader()->name(); ?>
                    </div>
                </div>
                <div class="d-flex">

                    <div class="main-group-image">
                        <?php if (!empty($userList)) { ?>
                        <?php
                            $i = 1;
                            foreach ($userList as $key => $member_id) {

                                $member_img = get_avatar_url($member_id);
                                if (empty($member_img)) {
                                    $member_img = get_template_directory_uri() . "/avatar.png";
                                }
                                if ($i > 3) {
                                    echo "+" . (count($userList) - 3);
                                    break;
                                } else {
                                    echo '<div class="mem-image">
                                                            <img src="' . $member_img . '" alt="" height="" title="" width="">
                                                        </div>';
                                }
                                $i++;
                            }
                        } ?>

                    </div>
                    ,
                </div>
                <div class="card-text">
                    <p><?php echo  substr($this->content(), 0, 100) ?><? if (strlen($this->content()) > 100): ?>...<?php endif; ?></p>
                </div>
                <div class="col-md-12 text-center action-button">
                    <?php
                    // show controls / buttons de  on the user <-> group relationship
                    switch ($this->getGroupType()) {
                            // not doing private at the moment
                        case 'Private':
                            $nonce = wp_create_nonce('join_private_group');
                            break;
                            // closed group 
                        case 'Closed':
                            $nonce = wp_create_nonce('join_closed_group');
                            switch ($this->currentUserMembership()) {
                                case 'leader':
                                    $nonce = wp_create_nonce('approve_group_request');
                                    // notify if there are any pending requests
                    ?>
                                    <div>Show pending requests here</div>
                                <?php
                                    break;
                                case 'member':
                                    $nonce = wp_create_nonce('leave_group');
                                ?>
                                    <button type="button" class="btn btn-secondary btn-leave-group" data-nonce="<?php echo $nonce; ?>" data-gid="<?php echo $this->id(); ?>">Leave Group</button></a>
                                    <?php
                                    break;
                                default:
                                    if ($this->userRequestAlreadySent(get_current_user_id())) {
                                    ?>
                                        <button type="button" class="btn btn-secondary btn-cancel-join-group-request" data-nonce="<?= $nonce;?>" data-gid="<?= $this->id();?>">Cancel Request</button></a>
                                    <?php
                                    } else {
                                        $nonce = wp_create_nonce('join_closed_group');
                                    ?>
                                        <button type="button" class="btn btn-secondary btn-join-closed-group" data-nonce="<?php echo $nonce; ?>" data-gid="<?php echo $this->id(); ?>">Request Access</button></a>
                                    <?php
                                    }
                            }
                            break;
                        default:
                            $nonce = wp_create_nonce('join_open_group');
                            switch ($this->currentUserMembership()) {
                                case 'leader':
                                    break;
                                case 'member':
                                    $nonce = wp_create_nonce('leave_group');
                                    ?>
                                    <button type="button" class="btn btn-secondary btn-leave-group" data-nonce="<?php echo $nonce; ?>" data-gid="<?php echo $this->id(); ?>">Leave Group</button></a>
                                <?php
                                    break;
                                default:
                                    $nonce = wp_create_nonce('join_open_group');
                                ?>
                                    <button type="button" class="btn btn-secondary btn-join-open-group" data-nonce="<?php echo $nonce; ?>" data-gid="<?php echo $this->id(); ?>">Join Group</button></a>
                    <?php
                            }
                    }
                    ?>
                </div>
            </div>
        </div>
<?
    }
}
