<?php

namespace helpers;

class Url_reactor{

    protected $url_matches;
    protected $formed_title;

    public function __construct(){
        $this->url_matches = require './config/url_matches.php';
        $this->formed_title = 'title по умолчанию';
    }

    public function get_urls($url){
        $path = ( $url === '' ) ? '': $url;
        
        $pattern = '/^' . preg_quote($path, '/') . '$/';
        // echo 'url is: ' . $pattern;
        // echo '<br>';
        
        foreach($this->url_matches as $key => $val){
            
            if( preg_match($pattern, $key, $m) ){
                // echo '<br>';
                // echo $key;
                $this->formed_title = $val;
                // echo '<br>';
                // print_r($m);
            }

        }

        return $this->formed_title; 
    }

}