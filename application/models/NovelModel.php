<?php 

class NovelModel extends CI_Model{
    public function getAllNovel(){
        return $this->db->get("novel")->result_array();
    }
}