<?php 

class Auth extends CI_Controller{
    public function index(){
        if($this->session->userdata("login")){
            redirect("novel");
        }else{
            $this->form_validation->set_rules("username", "Username", "trim|required");
            $this->form_validation->set_rules("password", "Password", "trim|required");
    
            if($this->form_validation->run() == false){
                $data["title"] = "My Novel | Login";
        
                $this->load->view("templates/authHeader", $data);
                $this->load->view("auth/login");
                $this->load->view("templates/authFooter");
            }else{
                // validation success
                $this->_login();
            }
        }
    }

    private function _login(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $user = NULL;
        if(str_contains($username, "@")){
            if($this->db->get_where("user", ["email" => $username])->row_array()){
                 // user is available
                $user = $this->db->get_where("user", ["email" => $username])->row_array();
                 // if the user is active
                if($user["is_active"] == 1){
                    // check password
                    if(password_verify($password, $user["password"])){
                        $data = [
                            "email" => $user["email"],
                            "role_id" => $user["role_id"]
                        ];

                        $this->session->set_userdata($data);
                        redirect("Novel");
                    }
                }else{
                    $this->session->set_flashdata("message", '<div class="alert alert-danger alert-dismissible fade show" role="alert">email has not been activated<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect("auth");
                }
            }else{
                // user not available
                $this->session->set_flashdata("message", '<div class="alert alert-danger alert-dismissible fade show" role="alert">Email is not registered<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect("auth");
            }
        }else{
            if($this->db->get_where("user", ["username" => $username])->row_array()){
                // user is available
                $user = $this->db->get_where("user", ["username" => $username])->row_array();
                // if the user is active
                if($user["is_active"] == 1){
                    // check password
                    if(password_verify($password, $user["password"])){
                        $data = [
                            "username" => $user["username"],
                            "role_id" => $user["role_id"],
                            "login" => "login"
                        ];

                        $this->session->set_userdata($data);
                        redirect("Novel");
                    }else{
                        $this->session->set_flashdata("message", '<div class="alert alert-danger alert-dismissible fade show" role="alert">Wrong Password<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect("auth");
                    }
                }else{
                    $this->session->set_flashdata("message", '<div class="alert alert-danger alert-dismissible fade show" role="alert">email has not been activated<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect("auth");
                }
            }else{
                // user not available
                $this->session->set_flashdata("message", '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username is not registered<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect("auth");
            }
        }
    }

    public function registration(){
        $this->form_validation->set_rules("username", "Username", "required|trim|is_unique[user.username]");
        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[user.email]",[
            "is_unique" => "This email has already registered"
        ]);
        $this->form_validation->set_rules("password1", "Password", "required|trim|min_length[5]|matches[password2]", [
            "matches" => "Password dont match!",
            "min_length" => "Password is to short"
        ]);
        $this->form_validation->set_rules("password2", "Password", "required|trim|matches[password1]");

        if($this->form_validation->run() == false){
            $data["title"] = "My Novel | Registration";
        
            $this->load->view("templates/authHeader",$data);
            $this->load->view("auth/registration");
            $this->load->view("templates/authFooter");
        }else{
            $data = [
                "username" => htmlspecialchars($this->input->post("username", true)),
                "email" => htmlspecialchars($this->input->post("email", true)),
                "image" => "default.jpg",
                "password" => password_hash($this->input->post("password1"), PASSWORD_DEFAULT),
                "role_id" => 2,
                "is_active" => 1,
                "date_created" => time()
            ];

            $this->db->insert("user", $data);
            $this->session->set_flashdata("message", '<div class="alert alert-success alert-dismissible fade show" role="alert">Your account has been created <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect("auth");
        }
    }

    public function logout(){
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("role_id");
        $this->session->unset_userdata("login");

        $this->session->set_flashdata("message", '<div class="alert alert-success alert-dismissible fade show" role="alert">You have been logged out<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect("auth");
    }
}