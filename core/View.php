<?php

namespace core;

class View {
    
    public $title;
    public $routes;
    public $controller;
    public $action;
    public $path;
    public $bread_crumbs;

    public $layouts = [
        'head' => 'head',
        'footer' => 'footer'
    ];

    public $js = [];
    public $css = [];

    public function __construct($arr, $title, $bread_crumbs){
       $this->routes = $arr;
       $this->controller = $arr['controller'];
       $this->action = $arr['action'];

       $this->path = $arr['controller'].'/'.$arr['action'];
       $this->title  = $title;
       $this->bread_crumbs  = $bread_crumbs;
    }

    public function css_load($view){
        $css_arr = require './config/css.php';
        if(isset($css_arr['everywhere'])) $this->css[]= $css_arr['everywhere'];
        if(isset($css_arr[$this->controller])) $this->css[]= $css_arr[$this->controller];

    }

    public function js_load($view){
        $js_arr = require './config/js.php';
        if(isset($js_arr['everywhere'])) $this->js[]= $js_arr['everywhere'];
        if(isset($js_arr[$this->controller])) $this->js[]= $js_arr[$this->controller];
    }

    public function layouts_render($layouts){
        $this->layouts['head']   = $layouts['head'];
        $this->layouts['footer'] = $layouts['footer'];
    }

    public function render($view, $vars = []){
        $this->css_load($view);
        $this->js_load($view);

        extract($vars);
        
        require 'app/view/layouts' . DIRECTORY_SEPARATOR . $this->layouts['head'] . '.php';
        require 'app/view/' . $this->routes['controller'] . DIRECTORY_SEPARATOR . $view . '.php';
        require 'app/view/layouts' . DIRECTORY_SEPARATOR . $this->layouts['footer'] . '.php';
    }
    
    public function redirect($url){
        header('location: ' . $url);
        exit;
    }

    public static function error_code($code){
        http_response_code($code);
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        require 'app/view/errors' . DIRECTORY_SEPARATOR . $code . '.php';
        exit;
    }

}