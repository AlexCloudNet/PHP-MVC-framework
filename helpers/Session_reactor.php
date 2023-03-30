<?php

namespace helpers;

class Session_reactor {

    protected $view_posts = [];

    public function __construct( $page_title ){
        if( !isset($view_posts[$page_title]) ) 
            $view_posts[] = $page_title;
            $_SESSION['vp'] = $view_posts;
    }

    public function get_view_posts(){
        return $this->view_posts;
    }
}