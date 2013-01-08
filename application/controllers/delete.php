<?php

 class Delete extends CI_Controller{
    
    function __construct(){
    parent::__construct();
    $this->load->helper('form');
    }
    
    public function index(){
  
$this->load->view ('deleteempView');
    }
    
//functiom to delete 	
public function checkDeleteEmployees(){
      $this->form_validation->set_rules('employeeno', 'Employee No', 'required');
          if($this->form_validation->run() == false){
            $this->load->view('addemp');
        }else{
            redirect('HomeController/index');
        }
    
}  }
?>
