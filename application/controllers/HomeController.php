<?php

class HomeController extends CI_Controller{
   
//function to load the homepage view    
public function index(){
        $this->load->view('homepage');
    }
    
//function to do the session 
  public function do_HomeController(){
        $this->session->sess_destroy();
        redirect('HomeController');
    }   
}
   
    
   
?>
