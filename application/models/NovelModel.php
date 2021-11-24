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
}