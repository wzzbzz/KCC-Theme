<?php

namespace jwc\Wordpress;

class WPPost extends WPEntity{

    protected $post_id;

    public function __construct( $post_id ) {

        if(is_object($post_id)){
            // check if the object is a WP_Post object
            if($post_id instanceof \WP_Post){
                $post_id = $post_id->ID;
            }
            
        }

        // check to see if post exists
        if(!get_post($post_id)){
            return false;
        }

        $this->post_id = $post_id;    
    }


    public function id(){
        return $this->post_id;
    }

    public function type(){
        return get_post_type($this->post_id);
    }

    public function title(){
        return get_the_title($this->post_id);
    }

    public function slug(){
        return get_post_field('post_name', $this->post_id);
    }

    public function content( $filters = false ){
        if($filters){
            return apply_filters('the_content', get_post_field('post_content', $this->post_id));
        }
        return get_post_field('post_content', $this->post_id);
    }

    public function excerpt(){
        return apply_filters('the_excerpt', get_post_field('post_excerpt', $this->post_id));
    }

    public function date($fmt = 'F j, Y'){
        $post = get_post($this->post_id);
        return date($fmt, strtotime($post->post_date));
    }

    public function author_id(){
        return get_post_field('post_author', $this->post_id);
    }

    public function author(){
        return new \jwc\Wordpress\WPUser( $this->author_id() );
    }

    public function currentUserIsAuthor(){
        return get_current_user_id() == $this->author_id();
    }
    public function thumbnail($size = 'large'){
        if(empty($this->thumbnail_url($size))){
            return '';
        }
        return "<img src='{$this->thumbnail_url($size)}' alt='{$this->thumbnail_alt($size)}' title='{$this->thumbnail_title($size)}' />";
    }

    public function permalink(){
        return get_the_permalink($this->post_id);
    }

    public function meta($key, $single = true){
        return get_post_meta($this->post_id, $key, $single);
    }

    public function get_meta($key, $single = true){
        return get_post_meta($this->post_id, $key, $single);
    }

    public function add_meta($key, $value, $unique = false){
        return add_post_meta($this->post_id, $key, $value, $unique);
    }
    public function set_meta($key, $value){
        return update_post_meta($this->post_id, $key, $value);
    }

    public function update_meta($key, $value, $prev_value = ''){
        return update_post_meta($this->post_id, $key, $value, $prev_value);
    }

    public function delete_meta($key, $value = ''){
        return delete_post_meta($this->post_id, $key, $value);
    }

    public function terms($taxonomy, $args = array()){
        return get_the_terms($this->post_id, $taxonomy, $args);
    }

    public function post_type(){
        return get_post_type($this->post_id);
    }

    public function status(){
        return get_post_status($this->post_id);
    }

    public function parent(){
        return wp_get_post_parent_id($this->post_id);
    }

    public function children(){
        return get_children(array('post_parent' => $this->post_id));
    }

    public function comments(){
        return get_comments(array('post_id' => $this->post_id));
    }

    public function custom($key, $single = true){
        return get_post_custom($this->post_id, $key, $single);
    }

    public function thumbnail_url($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        return wp_get_attachment_image_url($thumbnail_id, $size);
    }

    public function thumbnail_alt($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
    }

    public function thumbnail_caption($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_caption', true);
    }

    public function thumbnail_description($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_description', true);
    }

    public function thumbnail_title($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_title', true);
    }

    public function thumbnail_metadata($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        return wp_get_attachment_metadata($thumbnail_id);
    }

    public function thumbnail_sizes($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        return wp_get_attachment_image_sizes($thumbnail_id, $size);
    }

    public function thumbnail_mime_type($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        return get_post_mime_type($thumbnail_id);
    }

    public function thumbnail_file($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        return get_attached_file($thumbnail_id);
    }

    public function thumbnail_metadata_file($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        $metadata = wp_get_attachment_metadata($thumbnail_id);
        return $metadata['file'];
    }

    public function thumbnail_metadata_sizes($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        $metadata = wp_get_attachment_metadata($thumbnail_id);
        return $metadata['sizes'];
    }

    public function thumbnail_metadata_image($size = 'thumbnail'){
        $thumbnail_id = get_post_thumbnail_id($this->post_id);
        $metadata = wp_get_attachment_metadata($thumbnail_id);
        return $metadata['image'];
    }

    public function dump_meta(){
        return get_post_meta($this->post_id);
    }

}