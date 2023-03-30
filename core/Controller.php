<?php

namespace core;

use core\View;


use helpers\Url_reactor;
use helpers\BreadCrumbs_reactor;
use helpers\Session_reactor;


class Controller{

    public $routes;
    public $route;
    public $view;
    public $model;

    protected $url_reactor;
    public $title;

    protected $BreadCrumbs_reactor;
    public $bread_crumbs = [];

    // protected $Session_reactor;
    // public $view_posts;

    protected $get_params; 

    public function __construct($arr, $route, $get_params, $page_title){
        $this->routes = $arr;
        $this->route = $route;
        //Работает генератор url строки
        $this->url_reactor = new Url_reactor;
        $this->title = $this->url_reactor->get_urls( $page_title );
        //Работает генератор хлебных крошек
        $this->BreadCrumbs_reactor = new BreadCrumbs_reactor;
        $this->BreadCrumbs_reactor->save_crumbs($page_title);
        $this->bread_crumbs = $this->BreadCrumbs_reactor->get_crumbs();


        $this->model = $this->load_model( $this->routes['controller'] );
        $this->view = new View($arr, $this->title, $this->bread_crumbs);
        
        // $this->Session_reactor = new Session_reactor( $page_title );
        // $this->view_posts = $this->Session_reactor->get_view_posts();

    }


    public function load_model($name) {
        $path = 'app\model\\' . ucfirst($name) . '_model';
        if(class_exists($path)){
            return new $path;
        }
    }


}