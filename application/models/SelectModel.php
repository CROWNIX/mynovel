<?php 

class SelectModel extends CI_Model{
    public function getProvinsi(){
        return $this->db->get("provinsi")->result_array();
    }

    public function getDataKabupaten($id){
        return $this->db->get_where("kabupaten", ["provinsi_id" => $id])->result_array();
    }

    public function getDataKecamatan($id){
        return $this->db->get_where("kecamatan", ["kabupaten_id" => $id])->result_array();
    }
}