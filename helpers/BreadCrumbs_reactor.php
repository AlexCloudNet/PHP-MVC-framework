<?php

namespace helpers;

class BreadCrumbs_reactor{

    public $crumbs = [];

    public function get_crumbs(){
        return $this->crumbs;
    }

    public function save_crumbs( $path ){

        $urls = explode('/', $path);
        $temp_urls = '';

        foreach($urls as $p){
            $temp_urls .= $p . '/';
            $arr = [
                'crumbs' => $p,
                'url' => $temp_urls
            ];
            array_push($this->crumbs, $arr);
        }


    }

}