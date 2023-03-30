<?php
namespace core;
use core\View;

class Router
{
    protected static $routes = [];
    protected static $params = [];
    protected static $url;
    protected static $get_params;

    public static $page_title;
   
    public static function start_matches(){
        self::get_config_routes();
        self::get_matches();
        self::render();
    }

    protected static function get_config_routes(){
        $r_arr = require './config/routes.php';

        foreach($r_arr as $route => $val){
            $route_reg = '#' . $route . '#';
            self::$routes[$route_reg] = $val;
        }

    }
    //ищем совпадения переданного url в массиве заданных маршрутов routes
    protected static function get_matches(){
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach(self::$routes as $route => $opts){
            if( preg_match($route, $url, $matches) ){
                self::$params = $opts;
                self::$url = $matches;
                self::$get_params = $_GET;
                self::$page_title = $matches[0];
            }
        }
        View::error_code(404);
    }

    //ищем controller action
    protected static function render(){
        $controller_name = ucfirst(self::$params['controller'] . '_controller');
        $controller_path = 'app\controllers\\' . $controller_name;

        $action = self::$params['action'];

        if(class_exists($controller_path)){
            $controller = new $controller_path( self::$params, self::$url, self::$get_params, self::$page_title);
            
            if( !empty($action) ){
                if( method_exists($controller, $action . '_action') ) 
                    $controller->{$action . '_action'}();
            }else{
                $controller->index_action();
            }
            
        }else{
            View::error_code(404);
        }
        View::error_code(404);

    }





}