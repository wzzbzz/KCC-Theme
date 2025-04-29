<?php

namespace jwc\Wordpress;

class WPTerm{
    
    private $term_id;
    private $taxonomy;
    
    public function __construct( $term_id, $taxonomy ) {
        $this->term_id = $term_id;
        $this->taxonomy = $taxonomy;
    }
    
    public function term(){
        return get_term($this->term_id, $this->taxonomy);
    }

    public function id(){
        return $this->term_id;
    }

    public function term_id(){
        return $this->term_id;
    }

    public function slug(){
        return get_term($this->term_id, $this->taxonomy)->slug;
    }
    
    public function term_name(){
        return get_term($this->term_id, $this->taxonomy)->name;
    }
    
    public function term_description(){
        return get_term($this->term_id, $this->taxonomy)->description;
    }
    
    public function term_link(){
        return get_term_link($this->term_id, $this->taxonomy);
    }
    
    public function term_meta($key, $single = true){
        return get_term_meta($this->term_id, $key, $single);
    }
    
    public function term_children(){
        return get_term_children($this->term_id, $this->taxonomy);
    }
    
    public function term_parent(){
        return get_term($this->term_id, $this->taxonomy)->parent;
    }
    
    public function term_ancestors(){
        return get_ancestors($this->term_id, $this->taxonomy);
    }

    public function term_plural_name(){
        return get_taxonomy($this->taxonomy)->labels->name;
    }
}