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

            $toko = $this->TokoModel->getTokoByUsername($data["user"]["username"]);
            if(!$toko){
                redirect("toko/form");
            }
            
            if (empty($_FILES['cover']['name'])){
                $this->form_validation->set_rules('cover', 'Foto Utama', 'required', [
                    "required" => "Foto utama harus diisi"
                ]);
            }
            $this->form_validation->set_rules("judul", "Judul", "required|trim", [
                "required" => "Nama Produk harus diisi"
            ]);
            $this->form_validation->set_rules("kategori_id", "Kategori", "trim");
            $this->form_validation->set_rules("penulis", "Penulis", "required|trim", [
                "required" => "Penulis harus diisi"
            ]);
            $this->form_validation->set_rules("penerbit", "Penerbit", "required|trim", [
                "required" => "Penerbit harus diisi"
            ]);
            $this->form_validation->set_rules("jumlah_halaman", "Jumlah Halaman", "required|trim", [
                "required" => "Jumlah Halaman harus diisi"
            ]);
            $this->form_validation->set_rules("deskripsi", "Deskripsi", "required|trim", [
                "required" => "Deskripsi harus diisi"
            ]);
            $this->form_validation->set_rules("harga", "Harga", "required|trim", [
                "required" => "Harga harus diisi"
            ]);
            $this->form_validation->set_rules("stok", "Stok", "required|trim", [
                "required" => "Stok harus diisi"
            ]);
            $this->form_validation->set_rules("isbn", "ISBN", "required|trim", [
                "required" => "ISBN harus diisi"
            ]);
            $this->form_validation->set_rules("berat", "Berat", "required|trim", [
                "required" => "Berat harus diisi"
            ]);
            $this->form_validation->set_rules("panjang", "Panjang", "required|trim", [
                "required" => "Panjang harus diisi"
            ]);
            $this->form_validation->set_rules("lebar", "Lebar", "required|trim", [
                "required" => "ISBN harus diisi"
            ]);

            if($this->form_validation->run() == false){
                $data["title"] = "Tambah Produk";
                $data["kategori"] = $this->NovelModel->getKategori();
                $data["toko"] = $toko;
    
                $this->load->view("templates/headerToko", $data);
                $this->load->view("toko/tambah", $data);
                $this->load->view("templates/footer");       
            }else{
                $images = [
                    "image2" => "",
                    "image3" => "",
                    "image4" => "",
                    "image5" => "",
                ];
                
                if($_FILES["image2"]["name"]){
                    $config['upload_path'] = './assets/img/novel';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['max_size']     = '2000';

                    $this->load->library('upload', $config);
                    if($this->upload->do_upload("image2")){
                        $images["image2"] = $_FILES["image2"]["name"];
                    }
                }
                if($_FILES["image3"]["name"]){
                    $config['upload_path'] = './assets/img/novel';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['max_size']     = '2000';

                    $this->load->library('upload', $config);
                    if($this->upload->do_upload("image3")){
                        $images["image3"] = $_FILES["image3"]["name"];
                    }
                }
                if($_FILES["image4"]["name"]){
                    $config['upload_path'] = './assets/img/novel';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['max_size']     = '2000';

                    $this->load->library('upload', $config);
                    if($this->upload->do_upload("image4")){
                        $images["image4"] = $_FILES["image4"]["name"];
                    }
                }
                if($_FILES["image5"]["name"]){
                    $config['upload_path'] = './assets/img/novel';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['max_size']     = '2000';

                    $this->load->library('upload', $config);
                    if($this->upload->do_upload("image5")){
                        $images["image5"] = $_FILES["image5"]["name"];
                    }
                }
                
                if($_FILES["cover"]["name"]){
                    $config['upload_path'] = './assets/img/novel';
                    $config['allowed_types'] = 'jpeg|jpg|png';
                    $config['max_size']     = '2000';

                    $this->load->library('upload', $config);

                    if($this->upload->do_upload("cover") ){
                        $data = [
                            "judul" => htmlspecialchars($this->input->post("judul")),
                            "cover" => $_FILES["cover"]["name"],
                            "image2" => $images["image2"],
                            "image3" => $images["image3"],
                            "image4" => $images["image4"],
                            "image5" => $images["image5"],
                            "deskripsi" => htmlspecialchars($this->input->post("deskripsi")),
                            "penulis" => htmlspecialchars($this->input->post("penulis")),
                            "penerbit" => htmlspecialchars($this->input->post("penerbit")),
                            "kategori_id" => $this->input->post("kategori_id"),
                            "toko_id" => $this->input->post("toko_id"),
                            "kondisi" => $this->input->post("kondisi"),
                            "harga" => str_replace("-", "", $this->input->post("harga")),
                            "stok" => str_replace("-", "", $this->input->post("stok")),
                            "jumlah_halaman" => str_replace("-", "", $this->input->post("jumlah_halaman")),
                            "isbn" => htmlspecialchars($this->input->post("isbn")),
                            "berat" => str_replace("-", "", $this->input->post("berat")),
                            "lebar" => str_replace("-", "", $this->input->post("lebar")),
                            "panjang" => str_replace("-", "", $this->input->post("berat")),
                        ];

                        $this->db->insert("novel", $data);
                        $newdata = array(
                            'judul'  => 'Produk',
                            'pesan'  => 'Berhasil Ditambahkan',
                            'aksi'     => 'success'
                        );
                        
                        $this->session->set_userdata($newdata);
                        redirect("toko/produk");
                    }else{
                        echo $this->upload->display_errors();
                    }
                }
            }
        }else{
            redirect("auth");
        }
    }

    public function produk(){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }

            $toko = $this->TokoModel->getTokoByUsername($data["user"]["username"]);
            if(!$toko){
                redirect("toko/form");
            }
    
            $data["title"] = "Toko Saya";
            $data["kategori"] = $this->NovelModel->getKategori();
            $data["novel"] = $this->NovelModel->getAllNovelByTokoId($toko["id"]);
            $this->load->view("templates/headerToko", $data);
            $this->load->view("toko/produk", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }

    public function pesanan(){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }
    
            $toko = $this->TokoModel->getTokoByUsername($data["user"]["username"]);
            if(!$toko){
                redirect("toko/form");
            }
    
            $data["title"] = "Pesanan Saya";
            $data["kategori"] = $this->NovelModel->getKategori();
            $data["pesanan"] = $this->TokoModel->getPesanan();
            $novel = [];
            forEach($data["pesanan"] as $p){
                $novel[] = $this->NovelModel->getNovelById($p["novel_id"]);
            }
            $data["novel"] = $novel;
            
            $this->load->view("templates/headerToko", $data);
            $this->load->view("toko/pesanan", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }

    public function delete($id){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }
    
            $toko = $this->TokoModel->getTokoByUsername($data["user"]["username"]);
            if(!$toko){
                redirect("toko/form");
            }

            
        }else{
            redirect("auth");
        }
    }
}