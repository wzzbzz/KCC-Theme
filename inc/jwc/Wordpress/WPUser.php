<?php

namespace jwc\Wordpress;

class WPUser extends WPEntity{

    protected $user_id;

    public function __construct( $user_id ) {
        // make sure a user exists
        if( !get_userdata($user_id) ){
            return false;
        }
        $this->user_id = $user_id;    
    }

    public function id(){
        return $this->user_id;
    }

    public function meta($field_name){
        return get_user_meta($this->user_id, $field_name, true);
    }

    public function update_meta($field_name, $value){
        return update_user_meta($this->user_id, $field_name, $value);
    }

    public function name(){
        return get_the_author_meta('display_name', $this->user_id);
    }

    public function first_name(){
        return get_the_author_meta('first_name', $this->user_id);
    }

    public function last_name(){
        return get_the_author_meta('last_name', $this->user_id);
    }

    public function full_name(){
        return get_the_author_meta('first_name', $this->user_id) . ' ' . get_the_author_meta('last_name', $this->user_id);
    }

    public function user_login(){
        return get_the_author_meta('user_login', $this->user_id);
    }

    public function user_id(){
        return $this->user_id;
    }

    public function user_display_name(){
        return $this->meta('display_name');
    }

    public function display_name(){
        return $this->meta('display_name');
    }

    public function email(){
        return $this->user_email();
    }
    
    public function user_email(){
        return get_the_author_meta('user_email', $this->user_id);
    }

    public function user_avatar($size = 96){
        return get_avatar($this->user_id, $size);
    }

    public function user_meta($key, $single = true){
        return get_user_meta($this->user_id, $key, $single);
    }

    public function user_posts($args = array()){
        $args['author'] = $this->user_id;
        return get_posts($args);
    }

    public function user_posts_count(){
        $args = array(
            'author' => $this->user_id,
            'posts_per_page' => -1
        );
        $posts = get_posts($args);
        return count($posts);
    }

    public function user_comments($args = array()){
        $args['user_id'] = $this->user_id;
        return get_comments($args);
    }

    public function user_comments_count(){
        $args = array(
            'user_id' => $this->user_id,
            'count' => true
        );
        return get_comments($args);
    }


    public function roles(){
        $user = get_userdata($this->user_id);
        return $user->roles;
    }

    public function user_is_role($role){
        $user = get_userdata($this->user_id);
        return in_array($role, $user->roles);
    }
    
    public function user_role(){
        $user = get_userdata($this->user_id);
        return $user->roles[0];
    }

    public function user_registered(){
        return get_the_author_meta('user_registered', $this->user_id);
    }

    public function user_url(){
        return get_author_posts_url($this->user_id);
    }

    public function user_edit_url(){
        return get_edit_user_link($this->user_id);
    }

    public function user_avatar_url($size = 96){
        return get_avatar_url($this->user_id, array('size' => $size));
    }

    public function user_avatar_alt($size = 96){
        return get_post_meta($this->user_id, '_wp_attachment_image_alt', true);
    }

    public function user_avatar_caption($size = 96){
        return get_post_meta($this->user_id, '_wp_attachment_image_caption', true);
    }

    public function user_avatar_description($size = 96){
        return get_post_meta($this->user_id, '_wp_attachment_image_description', true);
    }

    public function user_avatar_id($size = 96){
        return get_user_meta($this->user_id, 'wp_user_avatar', true);
    }

    public function user_avatar_thumbnail($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return wp_get_attachment_image($thumbnail_id, $size);
    }

    public function user_avatar_thumbnail_url($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return wp_get_attachment_image_url($thumbnail_id, $size);
    }

    public function user_avatar_thumbnail_alt($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
    }

    public function user_avatar_thumbnail_caption($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_caption', true);
    }

    public function user_avatar_thumbnail_description($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_description', true);
    }

    public function user_avatar_thumbnail_title($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_title', true);
    }

    public function user_avatar_thumbnail_metadata($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return wp_get_attachment_metadata($thumbnail_id);
    }

    public function user_avatar_thumbnail_sizes($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return wp_get_attachment_image_sizes($thumbnail_id, $size);
    }

    public function user_avatar_thumbnail_mime_type($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return get_post_mime_type($thumbnail_id);
    }

    public function user_avatar_thumbnail_file($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        return get_attached_file($thumbnail_id);
    }

    public function user_avatar_thumbnail_metadata_file($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        $metadata = wp_get_attachment_metadata($thumbnail_id);
        return $metadata['file'];
    }

    public function user_avatar_thumbnail_metadata_sizes($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        $metadata = wp_get_attachment_metadata($thumbnail_id);
        return $metadata['sizes'];
    }

    public function user_avatar_thumbnail_metadata_image($size = 96){
        $thumbnail_id = get_user_meta($this->user_id, 'wp_user_avatar', true);
        $metadata = wp_get_attachment_metadata($thumbnail_id);
        return $metadata['image'];
    }


}