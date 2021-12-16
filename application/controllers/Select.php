<?php


class Select extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("SelectModel");
    }

    public function getDataKabupaten(){
        $provinsiId = $this->input->post("provinsi");
        echo json_encode($this->SelectModel->getDataKabupaten($provinsiId));
    }

    public function getDataKecamatan(){
        $kabupatenId = $this->input->post("kabupaten");
        echo json_encode($this->SelectModel->getDataKecamatan($kabupatenId));
    }
}