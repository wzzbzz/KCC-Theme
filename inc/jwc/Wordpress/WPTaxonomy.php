<?php

namespace jwc\Wordpress;

class WPTaxonomy{

    protected $taxonomy;

    public function __construct( $taxonomy ) {
        $this->taxonomy = $taxonomy;    
    }

    public function taxonomy(){
        return $this->taxonomy;
    }

    public function taxonomy_name(){
        return get_taxonomy($this->taxonomy)->labels->name;
    }

    public function taxonomy_description(){
        return get_taxonomy($this->taxonomy)->description;
    }

    public function taxonomy_terms($args = array()){
        return get_terms($this->taxonomy, $args);
    }

    public function taxonomy_term($term_id){
        return get_term($term_id, $this->taxonomy);
    }

    public function taxonomy_term_name($term_id){
        return get_term($term_id, $this->taxonomy)->name;
    }

    public function taxonomy_term_description($term_id){
        return get_term($term_id, $this->taxonomy)->description;
    }

    public function taxonomy_term_link($term_id){
        return get_term_link($term_id, $this->taxonomy);
    }

    public function taxonomy_term_meta($term_id, $key, $single = true){
        return get_term_meta($term_id, $key, $single);
    }

    public function taxonomy_term_children($term_id, $taxonomy){
        return get_term_children($term_id, $taxonomy);
    }

    public function taxonomy_term_parent($term_id){
        return get_term($term_id, $this->taxonomy)->parent;
    }

    public function taxonomy_term_ancestors($term_id, $taxonomy){
        return get_ancestors($term_id, $taxonomy);
    }

    public function taxonomy_term_count($term_id){
        return get_term($term_id, $this->taxonomy)->count;
    }

    public function taxonomy_term_posts($term_id, $args = array()){
        return get_posts(array_merge($args, array(
            'tax_query' => array(
                array(
                    'taxonomy' => $this->taxonomy,
                    'field' => 'term_id',
                    'terms' => $term_id
                )
            )
        )));
    }

    public function taxonomy_term_posts_count($term_id){
        return count($this->get_taxonomy_term_posts($term_id));
    }

    public function taxonomy_term_thumbnail($term_id, $size = 'thumbnail'){
        $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);
        return wp_get_attachment_image($thumbnail_id, $size);
    }

    public function taxonomy_term_thumbnail_url($term_id, $size = 'thumbnail'){
        $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);
        return wp_get_attachment_image_url($thumbnail_id, $size);
    }

    public function taxonomy_term_thumbnail_alt($term_id, $size = 'thumbnail'){
        $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
    }

    public function taxonomy_term_thumbnail_caption($term_id, $size = 'thumbnail'){
        $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);
        return get_post_meta($thumbnail_id, '_wp_attachment_image_caption', true);
    }

    public function meta($key, $single = true){
        return get_term_meta(get_queried_object_id(), $key, $single);
    }

    public function set_meta($key, $value, $unique = false){
        return add_term_meta(get_queried_object_id(), $key, $value, $unique);
    }

    public function meta_update($key, $value, $prev_value = ''){
        return update_term_meta(get_queried_object_id(), $key, $value, $prev_value);
    }
    
    
}