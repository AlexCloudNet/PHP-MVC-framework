<?php
namespace app\controllers;

use core\Controller;


class News_Controller extends Controller
{

    public function index_action(){
        
        $data = $this->model->get_news();
        $vars = [
            'news'=> $data
        ];
        $this->view->render('index', $vars);
    } 

    public function show_action(){
        $this->view->render('show');
    }
    
}