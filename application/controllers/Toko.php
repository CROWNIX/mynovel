<?php 

class Toko extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("NovelModel");
        $this->load->model("TokoModel");
    }

    public function index(){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }

            if(!$this->TokoModel->getTokoByUsername($data["user"]["username"])){
                redirect("toko/form");
            }
    
            $data["title"] = "Toko Saya";
            $data["kategori"] = $this->NovelModel->getKategori();

            $this->load->view("templates/headerToko", $data);
            $this->load->view("toko/index", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }
    
    public function form(){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }

            if($this->TokoModel->getTokoByUsername($data["user"]["username"])){
                redirect("toko");
            }
    
            $this->form_validation->set_rules("namaToko", "Nama Toko", "required|trim", [
                "required" => "Nama Toko harus diisi",
                "is_unique" => "Nama Toko sudah terpakai"
            ]);
            $this->form_validation->set_rules("provinsi", "Provinsi", "required|trim", [
                "required" => "Provinsi harus diisi"
            ]);
            $this->form_validation->set_rules("kota", "Kota", "required|trim", [
                "required" => "Kota harus diisi",
            ]);
            
            if ($this->form_validation->run() == false) {
                $data["title"] = "Toko Saya";
                $data["kategori"] = $this->NovelModel->getKategori();
    
                $this->load->view("templates/header", $data);
                $this->load->view("toko/form", $data);
                $this->load->view("templates/footer");             
            }else{
                $data = [
                    "nama_toko" => htmlspecialchars($this->input->post("namaToko")),
                    "provinsi" => htmlspecialchars($this->input->post("provinsi")),
                    "kota" => htmlspecialchars($this->input->post("kota")),
                    "penjual" => $this->session->userdata("username")
                ];
    
                $this->db->insert("toko", $data);
                redirect("toko");  
            }
        }else{
            redirect("auth");
        }
    }

    public function tambah(){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }

            if(!$this->TokoModel->getTokoByUsername($data["user"]["username"])){
                redirect("toko/form");
            }
    
            $data["title"] = "Tambah Produk";
            $data["kategori"] = $this->NovelModel->getKategori();

            $this->load->view("templates/header", $data);
            $this->load->view("toko/tambah", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }
}