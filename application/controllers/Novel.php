<?php
class Novel extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("NovelModel");
        $this->load->model("SelectModel");
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
            $data["keranjang"] = $this->NovelModel->joinNovelAndKeranjangByPembeli($data["user"]["username"]);
            $data["jumlah"] = count($data["keranjang"]);

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
            $data["keranjang"] = $this->NovelModel->joinNovelAndKeranjangByPembeli($data["user"]["username"]);
            $data["jumlah"] = count($data["keranjang"]);

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
            $data["keranjang"] = $this->NovelModel->joinNovelAndKeranjangByPembeli($data["user"]["username"]);
            $data["jumlah"] = count($data["keranjang"]);
            if(empty($data["novel"])){
                $newdata = array(
                    'judul'  => 'Novel',
                    'pesan'  => 'Tidak Ditemukan',
                    'aksi'     => 'info'
                );
                
                $this->session->set_userdata($newdata);
            }

            $this->load->view("templates/header", $data);
            $this->load->view("novel/kategori", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }

    public function keranjang(){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }
    
            $data["title"] = "My Novel | keranjang";
            $data["kategori"] = $this->NovelModel->getKategori();
            
            if($this->input->post()){
                $data["keranjang"] = $this->NovelModel->getKeranjangByNovelId($this->input->post("novel_id"));
                if(!$data["keranjang"]){
                    $keranjang = [
                        "stok" => $this->input->post("stok"),
                        "harga" => $this->input->post("harga"),
                        "novel_id" => $this->input->post("novel_id"),
                        "pembeli" => $this->input->post("pembeli")
                    ];
                    $this->db->insert("keranjang", $keranjang);
                }else{
                    forEach($data["keranjang"] as $keranjang){
                        if($this->input->post("novel_id") == $keranjang["novel_id"] && $this->input->post("pembeli") == $keranjang["pembeli"]){
                            $this->db->set('stok', $keranjang["stok"] += $this->input->post("stok"));
                            $this->db->set('harga', $keranjang["harga"] += $this->input->post("harga"));
                            $this->db->where('novel_id', $this->input->post("novel_id"));
                            $this->db->where('pembeli', $this->input->post("pembeli"));
                            $this->db->update('keranjang');
                        }else{
                            $keranjang = [
                                "stok" => $this->input->post("stok"),
                                "harga" => $this->input->post("harga"),
                                "novel_id" => $this->input->post("novel_id"),
                                "pembeli" => $this->input->post("pembeli")
                            ];
                            $this->db->insert("keranjang", $keranjang);
                        }
                    }
                }
                $newdata = array(
                    'judul'  => 'Novel',
                    'pesan'  => 'Berhasil Ditambahkan ke Keranjang',
                    'aksi'     => 'success'
                );
                
                $this->session->set_userdata($newdata);
            }
            $data["keranjang"] = $this->NovelModel->joinNovelAndKeranjangByPembeli($data["user"]["username"]);
            $data["jumlah"] = count($data["keranjang"]);

            $this->load->view("templates/header", $data);
            $this->load->view("novel/keranjang", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }

    public function checkout($id){
        if($this->session->userdata("login")){
            if($this->session->userdata("username")){
                $data["user"] = $this->db->get_where("user", ["username" => $this->session->userdata("username")])->row_array();
            }else{
                $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
            }

            $data["title"] = "My Novel | Checkout";
            $data["keranjang"] = $this->NovelModel->joinNovelAndKeranjangByPembeli($data["user"]["username"]);
            $data["jumlah"] = count($data["keranjang"]);
            $data["keranjang"] = $this->NovelModel->joinNovelAndKeranjangByIdAndUsername($id, $data["user"]["username"])[0];
            $data["novel"] = $this->NovelModel->getNovelById($id);
            $data["kategori"] = $this->NovelModel->getKategori();
            $data["provinsi"] = $this->SelectModel->getProvinsi();
            

            $this->load->view("templates/header", $data);
            $this->load->view("novel/checkout", $data);
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

            if($this->input->post()){
                $pesanan = [
                    "stok" => $this->input->post("stok"),
                    "harga" => $this->input->post("harga"),
                    "novel_id" => $this->input->post("novel_id"),
                    "pembeli" => $this->input->post("pembeli"),
                    "total" => $this->input->post("total"),
                    "toko_id" => $this->input->post("toko_id"),
                    "provinsi_id" => $this->input->post("provinsi_id"),
                    "kabupaten_id" => $this->input->post("toko_id"),
                    "kecamatan_id" => $this->input->post("toko_id"),
                    "alamat" => htmlspecialchars($this->input->post("alamat")),
                    "kode_pos" => htmlspecialchars(str_replace("-", "", $this->input->post("kode_pos"))),
                    "penerima" => htmlspecialchars($this->input->post("penerima")),
                    "no_telepon" => htmlspecialchars(str_replace("-", "", $this->input->post("no_telepon"))),
                    "status" => "belum bayar",
                    "date_created" => time()
                ];
                $this->db->insert("pesanan", $pesanan);

                $newdata = array(
                    'judul'  => 'Novel',
                    'pesan'  => 'Berhasil Dipesan',
                    'aksi'     => 'success'
                );
                
                $this->session->set_userdata($newdata);
            }
        
            $data["title"] = "My Novel | Pesanan Saya";
            $data["pesanan"] = $this->NovelModel->joinNovelAndPesananByUsername($this->session->userdata("username"));
            $data["keranjang"] = $this->NovelModel->joinNovelAndKeranjangByPembeli($data["user"]["username"]);
            $data["jumlah"] = count($data["keranjang"]);
       
            $this->load->view("templates/header", $data);
            $this->load->view("novel/pesanan", $data);
            $this->load->view("templates/footer");
        }else{
            redirect("auth");
        }
    }
}