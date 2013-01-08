<?php

class LoginController extends CI_Controller{
 //function to load the login view  
 public function index(){
        $this->load->view('login');
    }
    //function use the checkin login validatin for username and password and it will be required
    public function checkLogin(){
        $this->form_validation->set_rules('username' ,'Username','required|valid_Username');
        $this->form_validation->set_rules('password' ,'Password','required|callback_verifyUser');
        
        if($this->form_validation->run() == false){
            $this->load->view('login');
        }else{
            redirect('HomeController/index');
        }
    }
    //function to verify the username and password
    public function verifyUser(){
        $name = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->load->model('LoginModel');
        if($this->LoginModel->login($name, $pass)){
            return true;
        }else{
            $this->form_validation->set_message('verifyUser','Incorrect Username or Password. Please try again!!');
            return false;
        }
    }
    //function to logout 
    	 public function do_Logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
    //login seesion
     public function do_Login(){
        $this->session->sess_destroy();
        redirect('login');
    }
    
    
}
   
    
   
?>
