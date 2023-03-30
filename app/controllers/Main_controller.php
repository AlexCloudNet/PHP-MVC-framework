<?php
namespace app\controllers;

use core\Controller;
 
class Main_controller extends Controller
{

    public function index_action(){
        $this->view->render('index');
    }

    
}