<?php

namespace KCC;

class Group extends \jwc\Wordpress\WPPost
{

    public function image_url($size = 'thumbnail'){
        $image = parent::thumbnail_url($size);
        if(empty($image)){
            return get_template_directory_uri()."/assets/images/range_1.png";
        }
        return $image;
    }

    public function image( $size='thumbnail' ){
        $image = parent::thumbnail($size);
        
        if(empty($image)){
            return "<img src=\"".get_template_directory_uri()."/assets/images/range_1.png"."\">";
        }
        return $image;
    }

    public function name()
    {
        return $this->title();
    }


    /* member functions */
    // add a member to the group
    public function addMember($user_id)
    {
        if ($this->userIsMember($user_id)) {
            die("User is already a member of this group");
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


    // remove a member from the group
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

    // returns a list of member ids
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

    // returns a list of user objects
    public function getMembers()
    {

        $members = [];
        foreach ($this->getMemberIds() as $member_id) {
            $members[] = new User($member_id);
        }

        return $members;
    }

    public function leaderId()
    {
        return $this->author_id();
    }

    // get the group leader
    public function getLeader()
    {
        // leader is the post author
        return new User($this->leaderId());
    }

    public function every_id(){
        return array_merge([$this->leaderId()], $this->getMemberIds());
    }

    public function everyone(){
        return array_merge([$this->getLeader()], $this->getMembers());
    }

    public function everyIdBut($user_id){
        $everyone = $this->every_id();
        $key = array_search($user_id, $everyone);
        unset($everyone[$key]);
        return $everyone;
    }

    public function everyoneBut($user_id){
        $everyone = $this->everyIdbut($user_id);
        $users = [];
        foreach($everyone as $id){
            $users[] = new User($id);
        }
        return $users;
    }

    public function isClosed(){
        return $this->getGroupType() == 'Closed';
    }

    public function getGroupType()
    {
        return $this->meta('group_type');
    }

    public function type()
    {
        return $this->getGroupType();
    }


    // is the current user the leader of the group?
    public function currentUserIsLeader()
    {
        $user = wp_get_current_user();
        $user_id = $user->ID;

        return $this->getLeader()->id() == $user_id;
    }

    // is the specified user a member of the group?
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

    // is the current user a member of the group?
    public function currentUserIsMember()
    {
        $user = wp_get_current_user();
        $user_id = $user->ID;
        return $this->userIsMember($user_id);
    }

    // what is the membership status of the current user?
    // returns 'leader', 'member', or 'none'
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

    // lists pending Requests To Join The Group
    // this is in group_invite with request type = 'join_request' and status = 'pending'
    public function pendingRequests(){
        global $wpdb;
        $sql = $wpdb->prepare(
            "SELECT * FROM group_invite WHERE group_id = %d AND status = 'pending' AND request_type = 'join_request'",
            $this->id()
        );

        $results = $wpdb->get_results($sql);
        return $results;
    }

    // does the group have any pending requests?
    public function hasPendingRequests(){
        return count($this->pendingRequests()) > 0;
    }

    // has a request already been sent to the user?
    public function userRequestAlreadySent($user_id)
    {
        global $wpdb;
        $sql = $wpdb->prepare(
            "SELECT * FROM group_invite WHERE group_id = %d AND user_id=%d AND status = 'pending' AND request_type = 'join_request'",
            $this->id(),
            $user_id
        );

        $result = $wpdb->get_results($sql);
        return count($result) > 0;
    }

    public function userHasInvitationOrRequest($user_id){
        global $wpdb;
        $sql = $wpdb->prepare(
            "SELECT * FROM group_invite WHERE group_id = %d AND user_id=%d AND status = 'pending' AND (request_type = 'join_request' OR request_type = 'invitation')",
            $this->id(),
            $user_id
        );

        $result = $wpdb->get_results($sql);
        return count($result) > 0;
    }
    

    // cancel a pending request
    public function cancelUserJoinRequest($user_id)
    {
        if(!$this->userRequestAlreadySent($user_id)){
            return;
        }

        global $wpdb;
        $wpdb->update(
            'group_invite',
            array(
                'status' => 'cancelled'
            ),
            array(
                'group_id' => $this->id(),
                'user_id' => $user_id,
                'status' => 'pending',
                'request_type' => 'join_request'
            )
        );

        if($wpdb->last_error){
            pre($wpdb->last_error);
            die;
            return false;
        }

         // send notification of cancellation
         $args = ['group_id' => $this->id(), 'user_id' => $user_id];
         $notification = new \KCC\Notifications\JoinRequestCancelledNotification($args);
         $notification->send();
 
         // delete join request
         $wpdb->delete('group_requests', array('group_id' => $this->id(), 'user_id' => $user_id));

         
        return true;
    }

    // send a request to join a closed group from the specified user
    public function joinRequest($user_id)
    {
        global $wpdb;

        // first, check if there's already a cancelled request from this user
        $sql = $wpdb->prepare(
            "SELECT * FROM group_invite WHERE group_id = %d AND user_id = %d AND status = 'cancelled' AND request_type = 'join_request'",
            $this->id(),
            $user_id
        );

        // if there is one, simply set it back to pending.
        $result = $wpdb->get_results($sql);
        if(count($result) > 0){
            $wpdb->update(
                'group_invite',
                array(
                    'status' => 'pending'
                ),
                array(
                    'group_id' => $this->id(),
                    'user_id' => $user_id,
                    'status' => 'cancelled',
                    'request_type' => 'join_request'
                )
            );
            return true;
        }


        // otherwise, insert a new row, and send the notification
        $insertData = array(
            'user_id' => $user_id,
            'status' => 'pending',
            'request_type' => 'join_request',
            'group_id' => $this->id()
        );
        $wpdb->insert('group_invite', $insertData);

        // send notification to group leader that the join request was sent
        $args = ['group_id' => $this->id(), 'user_id' => $user_id];
        $notification = new \KCC\Notifications\JoinRequestNotification($args);
        $notification->send();

        // update "notification_sent = 1" in group_invite
        $wpdb->update(
            'group_invite',
            array(
                'notification_sent' => 1
            ),
            array(
                'group_id' => $this->id(),
                'user_id' => $user_id,
                'request_type' => 'join_request'
            )
        );

        return true;
    }

    // approve a user's request
    public function acceptUserRequest($request_id){
        
        $user_id = get_current_user_id();
        if($this->getLeader()->id() != $user_id){
            return;
        }

        // get the user id from the request

        global $wpdb;
        $sql = $wpdb->prepare(
            "SELECT user_id FROM group_invite WHERE id = %d",
            $request_id
        );

        $user_id = $wpdb->get_var($sql);

        // add the user to the group
        $this->addMember($user_id);

        // delete the request
        $wpdb->delete('group_invite', array('id' => $request_id));
        
        
        if($wpdb->last_error){
            pre($wpdb->last_error);
            die;
            return false;
        }

        // send notification to user that their request was accepted
        $args = ['group_id' => $this->id(), 'user_id' => $user_id];
        $notification = new \KCC\Notifications\JoinRequestAcceptedNotification($args);
        $notification->send();
    }

    public function declineUserRequest($request_id){

        $user_id = get_current_user_id(); 
        if($this->getLeader()->id() != $user_id){
            return;
        }

        global $wpdb;
        $sql = $wpdb->prepare(
            "SELECT user_id FROM group_invite WHERE id = %d",
            $request_id
        );

        $user_id = $wpdb->get_var($sql);


        // delete the request
        $wpdb->delete('group_invite', array('id' => $request_id));
        
        if($wpdb->last_error){
            pre($wpdb->last_error);
            die;
            return false;
        }

        // send notification to user that their request was declined
        $args = ['group_id' => $this->id(), 'user_id' => $user_id];
        $notification = new \KCC\Notifications\JoinRequestDeclinedNotification($args);
        $notification->send();
    }


    public function inviteUser( $user_id ){
        global $wpdb;
        $insertData = array(
            'user_id' => $user_id,
            'status' => 'pending',
            'request_type' => 'invitation',
            'group_id' => $this->id()
        );
        $wpdb->insert('group_invite', $insertData);

        // send notification to group leader that the join request was sent
        $args = ['group_id' => $this->id(), 'user_id' => $user_id];
        $notification = new \KCC\Notifications\InvitationNotification($args);
        $notification->send();

        return true;
    }


    // Does the current user have a pending invitation to this group?
    public function  currentUserHasPendingInvitation(){
        global $wpdb;
        $user_id = get_current_user_id();
        $sql = $wpdb->prepare(
            "SELECT * FROM group_invite WHERE group_id = %d AND user_id = %d AND status = 'pending' AND request_type = 'invitation'",
            $this->id(),
            $user_id
        );

        $results = $wpdb->get_results($sql);
        return count($results) > 0;
    }
    

    // is the current user allowed to see this page
    public function currentUserCanAccessPage(){
        // return false if not leader or member


        switch ($this->getGroupType()) {
            case 'Private':
                if($this->currentUserIsLeader() || $this->currentUserIsMember()){
                    return true;
                }
                return false;
                break;
            case 'Closed':
                if($this->currentUserIsLeader() || $this->currentUserIsMember()){
                    return true;
                }
                return false;
                break;
            case 'Open':
                return true;
                break;
        }
       
        return true;
    }

    public function userCanPost(){
        if($this->currentUserIsLeader() || $this->currentUserIsMember()){
            return true;
        }
        return false;
    }

    public function blogPosts(){
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'meta_query' => array(
                array(
                    'key' => 'group_id',
                    'value' => $this->id(),
                    'compare' => '='
                )
            )
        );

        $query = new \WP_Query($args);

        $posts = [];
        foreach($query->posts as $post){
            $post = new \KCC\Communications\BlogPost($post->ID);
            $posts[] = $post;
        }
        return $posts;
    }

    public function reports( $report_type ){
        $reportData = get_posts( array(
            'post_type'      => 'reportsforms',
            'post_status'    => 'publish',
            'numberposts' => 1000,
             'meta_query'    => array(
                       'relation'      => 'AND',
                       array(
                       'key' => 'group_id',
                       'value'   => $post->ID,
                       'compare' => '='
                       )
                       )
       ) );
       
    }

    // The Cell Version of the Group.
    /* cell card for groups in listing pages */
    public function render_cell()
    {
        $css = '';
        if( $this->currentUserIsLeader() ){
            $css .= ' my-group-cell ';
        }
        if( $this->currentUserIsMember() ){
            $css .= ' my-joined-group-cell ';
        }
        if( $this->currentUserIsLeader() && $this->hasPendingRequests() ){
            $css .= ' my-group-has-pending-requests ';
        }

        if( !$this->currentUserIsLeader() && $this->currentUserHasPendingInvitation() ){
            $css .= ' invited-to-join ';
        }



?>
        <div class="group-cell <?= $css ?> col-lg-3">
            <div class="custom-card">

                <!--  <a href="javascript:void(0);" data-toggle="modal" data-target="#group-modal"> -->
                <div class="image">

                    <a href="<?php echo $this->permalink(); ?>">
                       <?= $this->image();?>
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
                <div class="d-flex justify-content-center">
                    <div class="group-title">
                        <h4><?php echo $this->title() ?></h4>
                        <h6 class="mt-2" style="font-size:12px;"><?php echo date("m-d-Y", strtotime($this->date())); ?></h6>
                    </div>
                </div>
                <div class="d-flex main-content  justify-content-center">
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
                <div class="d-flex justify-content-center">

                    <div class="main-group-image">
                        <?php 
                        $members = $this->getMembers();
                        if (!empty($members)) { ?>
                        <?php
                            $i = 1;
                            foreach ($members as $member) {
                                
                                if ($i > 3) {
                                    echo "+" . (count($members) - 3);
                                    break;
                                } else {
                                    echo '<div class="mem-image">' . $member->image() . '</div>';
                                }
                                $i++;
                            }
                        } ?>

                    </div>
                </div>
                <div class="card-text d-flex justify-content-center">
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
                                    if ($this->hasPendingRequests()) {
                                        ?>
                                        <a href="<?php echo $this->permalink(); ?>manage-requests"><button type="button" class="btn btn-primary btn-manage-group-requests" data-nonce="<?php echo $nonce; ?>" data-gid="<?php echo $this->id(); ?>">Manage Incoming Requests</button></a>
                                        </a><?
                                    }
                                    else{
                                        
                                        ?>
                                        <?
                                    }
                                ?>      
                                <?php
                                    break;
                                case 'member':
                                    $nonce = wp_create_nonce('leave_group');
                                ?>
                                  <!--  <button type="button" class="btn btn-primary btn-leave-group" data-nonce="<?php echo $nonce; ?>" data-gid="<?php echo $this->id(); ?>">Leave Group</button></a>-->
                                    <?php
                                    break;
                                default:
                                    if ($this->userRequestAlreadySent(get_current_user_id())) {
                                    ?>
                                        <button type="button" class="btn btn-primary btn-cancel-join-group-request" data-nonce="<?= $nonce;?>" data-gid="<?= $this->id();?>" disabled>Request Pending</button></a>
                                    <?php
                                    } elseif( $this->currentUserHasPendingInvitation() ){
                                    ?>
                                        <button type="button" class="btn btn-primary btn-accept-invitation acceptInvitation" data-nonce="<?= $nonce;?>" data-gid="<?= $this->id();?>" data-uid="<?= get_current_user_id();?>">Accept Invitation</button></a>
                                        <button type="button" class="btn btn-primary btn-decline-invitation declineInvitation" data-nonce="<?= $nonce;?>" data-gid="<?= $this->id();?>" data-uid="<?= get_current_user_id();?>">Decline Invitation</button></a>
                                    <?php
                                    }
                                    else {
                                        $nonce = wp_create_nonce('join_closed_group');
                                    ?>
                                        <button type="button" class="btn btn-primary btn-join-closed-group" data-nonce="<?php echo $nonce; ?>" data-gid="<?php echo $this->id(); ?>">Request Access</button></a>
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
                                    <!--<button type="button" class="btn btn-primary btn-leave-group" data-nonce="<?php echo $nonce; ?>" data-gid="<?php echo $this->id(); ?>">Leave Group</button></a>-->
                                <?php
                                    break;
                                default:
                                    $nonce = wp_create_nonce('join_open_group');
                                ?>
                                    <button type="button" class="btn btn-primary btn-join-open-group" data-nonce="<?php echo $nonce; ?>" data-gid="<?php echo $this->id(); ?>">Join Group</button></a>
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
