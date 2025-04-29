<?php

namespace KCC;

use jwc\Wordpress\WPController;

class Members extends WPController{
    // implement the init function, and an add rewrite section which will add rewrite rules for /members pages
    public function init(){
        parent::init();
        add_action('init', array($this, 'add_rewrite'));
        add_filter('query_vars', array($this, 'query_vars'));
        add_action('template_include', array($this, 'template_include'));
    }

    public function add_rewrite(){
        // this is an index page 
        add_rewrite_rule('^members/dashboard/?$', 'index.php?members=1&dashboard=1', 'top');
        // add_rewrite_rule('^members/?$', 'index.php?members=1', 'top');
    
        // members + a name is the users profile page
        add_rewrite_rule('^members/([^/]+)/?$', 'index.php?members=1&name=$matches[1]', 'top');
        // add_rewrite_rule('^members/page/([0-9]{1,})/?$', 'index.php?members=1&paged=$matches[1]', 'top');
    }

    public function query_vars($vars){
        // $vars[] = 'members';
        // $vars[] = 'paged';
        return $vars;
    }

    public function template_include($template){
        if(get_query_var('members')){
            if(get_query_var('dashboard')){
                return __KCC_ROOT__ . '/templates/dashboard.php';
            }
            if(get_query_var('name')){
                return __KCC_ROOT__ . '/templates/profile.php';
            }
            return __KCC_ROOT__ . '/templates/members.php';
            //return __DIR__ . '/templates/members.php';
        }
        return $template;
    }
}