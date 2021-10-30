<?php  

class Home extends CI_Controller{
    public function index(){
        $data["title"] = "My Novel | Home";

        $this->load->view("templates/authHeader", $data);
        $this->load->view("home/index");
        $this->load->view("templates/authFooter");
    }
}