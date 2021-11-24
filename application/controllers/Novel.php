<?php


class Novel extends CI_Controller{
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
            $data["kategori"] = $this->NovelModel->getKategori();

            $this->load->view("templates/header", $data);
            $this->load->view("novel/index", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }

    public function detail($id){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }
    
            $data["title"] = "My Novel | Detail";
            $data["novel"] = $this->NovelModel->getNovelById($id);
            $data["kategori"] = $this->NovelModel->getKategori();

            $this->load->view("templates/header", $data);
            $this->load->view("novel/detail", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }

    public function kategori($kategori){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }
    
            $data["kategori"] = $this->NovelModel->getKategori();
            $data["novel"] = $this->NovelModel->joinNovelAndKategori($kategori);
            $data["title"] = "My Novel | " . $kategori;
            if(empty($data["novel"])){
                $this->session->set_flashdata("kategori", "tidak tersedia");
            }

            $this->load->view("templates/header", $data);
            $this->load->view("novel/kategori", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }
}