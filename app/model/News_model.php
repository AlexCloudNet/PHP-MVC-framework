<?php
namespace app\model;

use core\Model;

class News_model extends Model {

    public function get_news(){
        $result = $this->db->row('SELECT title, description FROM news');
        return $result;
    }
    
}