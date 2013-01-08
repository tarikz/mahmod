<?php

class Welcome extends CI_Controller {

//this function to load the publice home page 
public function index () { 
        $this->load->view('welcomeView');
        
    }
   
 public function do_homeView(){
        $this->session->sess_destroy();
        redirect('welcomeView');
    }
    
}
?>
