<?php 

class TokoModel extends CI_Model{
    public function getTokoByUsername($username){
        return $this->db->get_where("toko", ["penjual" => $username])->row_array();
    }

    public function getPesanan(){
        return $this->db->get("pesanan")->result_array();
    }
}