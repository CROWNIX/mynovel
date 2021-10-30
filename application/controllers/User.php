<?php 

class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("NovelModel");
    }

    public function index(){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }
    
            $data["title"] = "My Novel";
            $data["novel"] = $this->NovelModel->getAllNovel();

            $this->load->view("templates/header", $data);
            $this->load->view("user/index", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }
}