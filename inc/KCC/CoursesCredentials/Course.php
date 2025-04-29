<?php

namespace KCC\CoursesCredentials;


class Course extends \jwc\Wordpress\WPPost{


    public function status(){
        return learndash_course_status($this->id());
    }
    public function course_description(){}

    public function learning_objectives(){}

    public function agenda(){}

    public function duration($display = false){ 

        $duration = get_field('duration', $this->id());
        if($display){
            if($duration==1){
                return $duration . " hour";
            }else{
                return $duration . " hours";
            }
        }else{
            return $duration;
        }

    }

    public function language(){}

    public function get_user_progress($user_id, $type="summary"){
        return learndash_user_get_course_progress($user_id, $this->id(), $type);
    }

    public function user_percentage_complete($user_id){
        $progress = $this->get_user_progress($user_id);

        return $progress['percentage'];
    }

    public function thumbnail($size = 'large')
    {
        if(empty($thumbnail = parent::thumbnail($size))){
            return '<img src="' . get_template_directory_uri() . '/assets/images/range_1.png" alt="Course Thumbnail">';
        }

        return $thumbnail;
    }

}
