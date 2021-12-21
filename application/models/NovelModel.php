<?php 

class NovelModel extends CI_Model{
    public function getAllNovel(){
        return $this->db->get("novel")->result_array();
    }

    public function getNovelById($id){
        return $this->db->get_where("novel", ["id" => $id])->row_array();
    }

    public function getKategori(){
        return $this->db->get("kategori")->result_array();
    }

    public function joinNovelAndKategori($kategori){
        $this->db->select('*');
        $this->db->from('novel');
        $this->db->join('kategori', 'kategori.id = novel.kategori_id');
        $this->db->where('kategori', $kategori);
        return $this->db->get()->result_array();
    }

    public function getAllNovelByTokoId($tokoId){
        return $this->db->get_where("novel", ["toko_id" => $tokoId])->result_array();
    }

    public function getAllKeranjang(){
        return $this->db->get("keranjang")->result_array();
    }

    public function getKeranjangByNovelId($id){
        return $this->db->get_where("keranjang", ["novel_id" => $id])->result_array();
    }

    public function joinNovelAndKeranjangByIdAndUsername($id, $username){
        $this->db->select("*");
        $this->db->from('novel');
        $this->db->join('keranjang', 'keranjang.novel_id = novel.id');
        $this->db->where('novel_id', $id);
        $this->db->where("pembeli", $username);
        return $this->db->get()->result_array();
    }

    public function joinNovelAndKeranjangByPembeli($pembeli){
        $this->db->select("*");
        $this->db->from('novel');
        $this->db->join('keranjang', 'keranjang.novel_id = novel.id');
        $this->db->where('pembeli', $pembeli);
        return $this->db->get()->result_array();
    }

    public function joinNovelAndPesananByUsername($username){
        $this->db->select("*");
        $this->db->from('novel');
        $this->db->join('pesanan', 'pesanan.novel_id = novel.id');
        $this->db->where('pembeli', $username);
        return $this->db->get()->result_array();
    }
}