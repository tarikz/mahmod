<?php 

 class Add extends CI_Controller{
    
    function __construct(){
    parent::__construct();
    $this->load->helper('form');
    }
    //this function is for add user form which will call the addemp view form to upload  
public function index(){
  
        $data ['title'] =  "add";
	$this->load->view ('addemp',$data);
    }
    //this function is check what is required to be enter by the user.

    public function checkAddEmployees(){
     
	 
	    $this->form_validation->set_rules('firstname', 'First Name', 'required');
	    $this->form_validation->set_rules('lastname', 'Last Name', 'required'); 
	    $this->form_validation->set_rules('gender', 'Gender', 'required');  
	    $this->form_validation->set_rules('gender', 'Gender', 'required'); 
            $this->form_validation->set_rules('DOB', 'D.O.B.', 'required');
            $this->form_validation->set_rules('department', 'Department', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('salary', 'Salary', 'required');
//if the validation is false  
          if($this->form_validation->run() == false){
            $this->load->view('addemp');
        }else{
            redirect('HomeController/index');
        }
    
    }
	

	
}
 ?>