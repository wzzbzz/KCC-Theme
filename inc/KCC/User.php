<?php

namespace KCC;

use KCC\CoursesCredentials\Course;

class User extends \jwc\Wordpress\WPUser{

    public function __construct($id){
        parent::__construct($id);
    }

    public function group_ids(){
        global $wpdb;
        $table_name = 'users_groups';
        $sql = "SELECT group_id FROM {$table_name} WHERE user_id = %d";
        $sql = $wpdb->prepare($sql, $this->id());
        
        return $wpdb->get_col($sql);
    }

    public function myGroups(){
        $group_ids = $this->group_ids();

        $groups = [];
        foreach($group_ids as $group_id){
            $post = get_post($group_id);
            if(empty($post)){
                continue;
            }
           
            if($post->post_status == 'publish'){
                $groups[] = new Group($group_id);
            }
            
        }
        
        return $groups;
    }

    public function groupsILead(){
        // get posts of type "group" where the author is the current user
        $args = array(
            'post_type' => 'groups',
            'author' => $this->id(),
            'posts_per_page' => -1,
            'post_status' => 'publish'
        );
        $query = new \WP_Query($args);
        $groups = [];
        foreach($query->posts as $post){
            $groups[] = new Group($post->ID);
        }
        return $groups;
    }

    public function allMyGroups(){
        return array_merge($this->myGroups(), $this->groupsILead());
    }

    
    public function addToGroup($group_id){
        $group = new Group($group_id);
        $group->addMember($this->id());

        return true;
    }

    public function userIsGroupMember($group_id){
        return in_array($group_id, $this->group_ids());
    }

    public function default_image_url(){
        return get_template_directory_uri()."/avatar.png";
    }

    public function image(){
        $image = parent::user_avatar();
        if(empty($image)){
            return $this->default_image();
        }
        return $image;
    }

    public function image_url(){
        $image = parent::user_avatar_url();
        if(empty($image)){
            return $this->default_image_url();
        }
        return $image;
    }

    public function hasAnyInvitationsOrRequests(){
        global $wpdb;
        $table_name = 'group_invitations';
        $sql = "SELECT * FROM {$table_name} WHERE  user_id = %d";
        $sql = $wpdb->prepare($sql, $this->id());
        $result = $wpdb->get_row($sql);
        return $result;
    }

    public function reports($report_slug){
        $allGroups = array_merge($this->myGroups(), $this->groupsILead());
        // extract the ids
        $myGroups = array_map(function($group){
            return $group->id();
        }, $allGroups);

        // get all the reports for all of my groups who have the taxonomy term of $report_slug
        $args = array(
            'post_type' => 'kcc_report',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'kcc_report_type',
                    'field' => 'slug',
                    'terms' => $report_slug
                )
            ),
            'meta_query' => array(
                array(
                    'key' => 'group_id',
                    'value' => $myGroups,
                    'compare' => 'IN'
                )
            )
        );
        
        $group_posts =  get_posts($args);
        // now get all the reports with audience of 'all-rrn-users'
        $args = array(
            'post_type' => 'kcc_report',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'kcc_report_type',
                    'field' => 'slug',
                    'terms' => $report_slug
                )
            ),
            'meta_query' => array(
                array(
                    'key' => 'audience',
                    'value' => 'all-rnn-users',
                    'compare' => '='
                )
            )
        );
        

        $all_rrn_posts = get_posts($args);
 

        $posts = array_merge($group_posts, $all_rrn_posts);

        $reports = [];
        foreach($posts as $post){

            $report = Reports\Reports::factory($post->ID);
            $reports[] = $report;

        }

        return $reports;

    }


    public function myBlogPosts(){
        $args = array(
            'post_type' => 'post',
            'author' => $this->id(),
            'posts_per_page' => -1
        );
        $query = new \WP_Query($args);
        $posts = [];
        foreach($query->posts as $post){
            $posts[] = new \KCC\Communications\BlogPost($post->ID);
        }
        return $posts;
    }

    public function myAnnouncements(){
        $args = array(
            'post_type' => 'announcement',
            'author' => $this->id(),
            'posts_per_page' => -1
        );
        $query = new \WP_Query($args);
        $posts = [];
        foreach($query->posts as $post){
            $posts[] = new \KCC\Communications\Announcement($post->ID);
        }
        return $posts;
    }

    public function avatar_url($size=96){
        $avatar_url = parent::user_avatar_url($size);
        if(!empty($avatar_url)){
            return $avatar_url;
        }
        return get_template_directory_uri() . "/avatar.png";
    }

    public function country(){
        return $this->meta('country');
    }

    public function state(){
        return $this->meta('state');
    }

    public function city(){
        return $this->meta('city');
    }

    public function zip(){
        return $this->meta('zip');
    }

    public function zipcode(){
        return $this->meta('code');
    }


    public function nickname(){
        return $this->meta('nickname');
    }

    public function birth_year(){
        return $this->meta('dob');
    }


    public function highest_education(){
        return $this->meta('edu');
    }
    

    public function ethnicity(){
        return $this->meta('ethnicity');
    }

    public function gender(){
        return $this->meta('gendar');
    }
    

    public function race(){
        return $this->meta('ethnicity');
    }

    public function language(){
        return $this->meta('lang');
    }

    public function employment_status(){
        return $this->meta('currently_employed');
    }

    public function employer(){
        return $this->meta('employer');
    }

    public function union(){
        return $this->meta('rep_union');
    }

    public function job_title(){
        return $this->meta('job_title');
    }

    public function occupation(){
        return $this->meta('occupation');
    }

    public function occupational_field(){
        return $this->meta('occup_field');
    }

    public function work_setting(){
        return $this->meta('work_setting');
    }



    public function hazardous_waste_site(){
        return $this->meta('hazardous_waste_site');
    }
    

    public function profile_link(){
        return get_site_url()."/users/". $this->nicename();
    }

    public function connections( $type="all"){
        $connections = get_user_meta($this->id(), 'connections', true);
        if(empty($connections)){
            return ["followers" => [], "following" => []];
        }
        if($type == "all"){
            return $connections;
        }
        return $connections[$type];
    }

    public function connections_count($type="all"){
        $connections = $this->connections($type);
        if(empty($connections)){
            return 0;
        }
        switch($type){
            case "all":
                return count($connections['followers']) + count($connections['following']);
            case "followers":
                return count($connections['followers']);
            case "following":
                return count($connections['following']);
        }

    }

    public function learndash_course_ids(){
        return learndash_get_user_courses_from_meta($this->id());
    }

    public function myCourses(){
        $ids = $this->learndash_course_ids();
        $courses = [];
        foreach($ids as $id){
            $courses[] = new Course($id);
        }
        return $courses;
    }

    // TBD - make view class
    public function render_profile_pic(){
        ?>
                   <div class="profile-information-column">
                     <!-- first the user avatar -->
                     <div class="profile_image_div  d-flex justify-content-center">
                        <img class="profile_image" src="<?php echo $this->user_avatar_url(); ?>">
                     </div>
                     <div class="display_name d-flex justify-content-center">
                        <?= $this->full_name();?></div>
                     <div class="display_email d-flex justify-content-center">
                        <a href="mailto:<?= $this->email();?>"><?= $this->email(); ?></a>
                     </div>
                     <div class="display_location d-flex justify-content-center">
                        <span><?= $this->state();?>, <?= $this->city();?></span>
                     </div>
                     <!-- then the location and number of connects -->
                     <div class="display_groups_connects  d-flex justify-content-center">
                        <div class="profile_count d-lg-flex d-md-flex align-self-end">
                           <div class="profile_count_main d-lg-flex d-md-flex justify-content-between px-2 align-items-center">
                              <div class="profile_count1 d-flex justify-content-start align-items-center">
                                 <div class="px-2"><span><?= $this->connections_count() ?></span></div>
                                 <div class="">
                                    <p>Connects</p>
                                 </div>
                              </div>
                              <div class=" profile_count2 d-flex justify-content-start align-items-center">
                                 <div class="px-3"><span><?= count($this->allMyGroups()); ?></span></div>
                                 <div class="">
                                    <p>Groups</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- then the badges -->
                     <div class="profile_medal1 d-flex justify-content-center ml-3 mr-3">
                        <div class="d-flex justify-content-center">
                              <!-- begin badges paste -->
                              <div class="col-md-3 col-3">
                                 <div class="text-center pt-1 pb-2">
                                    <a href="/courses/the-collaborative-disaster-volunteer-credential-level-one/">
                                       <img src="/wp-content/themes/astra/assets/images/cdvc_1b.png" width="50" class="img-fluid membergroup-img1 pro_img1" alt="image">
                                    </a>
                                 </div>
                              </div>
                              <div class="col-md-3 col-3">
                                 <div class="text-center pt-1 pb-2">
                                    <a href="/courses/the-collaborative-disaster-volunteer-credential-level-two/">
                                       <img src="/wp-content/themes/astra/assets/images/cdvc_2b.png" width="50" class="img-fluid membergroup-img1 pro_img2" alt="image">
                                    </a>
                                 </div>
                              </div>
                              <div class="col-md-3 col-3">
                                 <div class="text-center pt-1 pb-2">
                                    <a href="/courses/the-collaborative-disaster-volunteer-credential-level-three/">
                                       <img src="/wp-content/themes/astra/assets/images/cdvc_3b.png" width="50" class="img-fluid membergroup-img1 pro_img3" alt="image">
                                    </a>
                                 </div>
                              </div>
                           <!-- end badges paste -->
                           <?php //echo do_shortcode('[user_badges]'); 
                           ?>
                        </div>
                     </div>
                  </div>div class="profile-information-column">
                     <!-- first the user avatar -->
                     <div class="profile_image_div  d-flex justify-content-center">
                        <img class="profile_image" src="<?php echo $this->user_avatar_url(); ?>">
                     </div>
                     <div class="display_name d-flex justify-content-center">
                        <?= $this->full_name();?></div>
                     <div class="display_email d-flex justify-content-center">
                        <a href="mailto:<?= $this->email();?>"><?= $this->email(); ?></a>
                     </div>
                     <div class="display_location d-flex justify-content-center">
                        <span><?= $this->state();?>, <?= $this->city();?></span>
                     </div>
                     <!-- then the location and number of connects -->
                     <div class="display_groups_connects  d-flex justify-content-center">
                        <div class="profile_count d-lg-flex d-md-flex align-self-end">
                           <div class="profile_count_main d-lg-flex d-md-flex justify-content-between px-2 align-items-center">
                              <div class="profile_count1 d-flex justify-content-start align-items-center">
                                 <div class="px-2"><span><?= $this->connections_count() ?></span></div>
                                 <div class="">
                                    <p>Connects</p>
                                 </div>
                              </div>
                              <div class=" profile_count2 d-flex justify-content-start align-items-center">
                                 <div class="px-3"><span><?= count($this->allMyGroups()); ?></span></div>
                                 <div class="">
                                    <p>Groups</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- then the badges -->
                     <div class="profile_medal1 d-flex justify-content-center ml-3 mr-3">
                        <div class="d-flex justify-content-center">
                              <!-- begin badges paste -->
                              <div class="col-md-3 col-3">
                                 <div class="text-center pt-1 pb-2">
                                    <a href="/courses/the-collaborative-disaster-volunteer-credential-level-one/">
                                       <img src="/wp-content/themes/astra/assets/images/cdvc_1b.png" width="50" class="img-fluid membergroup-img1 pro_img1" alt="image">
                                    </a>
                                 </div>
                              </div>
                              <div class="col-md-3 col-3">
                                 <div class="text-center pt-1 pb-2">
                                    <a href="/courses/the-collaborative-disaster-volunteer-credential-level-two/">
                                       <img src="/wp-content/themes/astra/assets/images/cdvc_2b.png" width="50" class="img-fluid membergroup-img1 pro_img2" alt="image">
                                    </a>
                                 </div>
                              </div>
                              <div class="col-md-3 col-3">
                                 <div class="text-center pt-1 pb-2">
                                    <a href="/courses/the-collaborative-disaster-volunteer-credential-level-three/">
                                       <img src="/wp-content/themes/astra/assets/images/cdvc_3b.png" width="50" class="img-fluid membergroup-img1 pro_img3" alt="image">
                                    </a>
                                 </div>
                              </div>
                           <!-- end badges paste -->
                           <?php //echo do_shortcode('[user_badges]'); 
                           ?>
                        </div>
                     </div>
                  </div>
         </div>
        <?php
    }

}