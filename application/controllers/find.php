<?php

class Find extends CI_Controller {
//public function is to load the search model
    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('searchModel');
    }
//public function is to load the find employees view
 public function index(){
        $this->load->view('findempView');
    }
function findempView(){
       $this->load->model('searchmodel');
   	$firstname = $this->input->get('firstname');
	$lastname = $this->input->get('lastname');
	$department = $this->input->get('department');
	$title = $this->input->get('title');
	
	$results= $this->searchmodel->search($firstname,$lastname,$department,$title);
	//count the result and put in array
	$data['count'] = count($results['rows']);
	$data['results'] = $results['rows']; 
	
	echo json_encode($data);
	
	}
    public function execute_search(){
        // get the posted for search to find employess
        $search_term = $this->input->post('search');

        // Use a the search model to get the results. and will pass to the view find.
        $data['results'] = $this->searchmodel->get_results($search_term);
        $this->load->view('findempView', $data);
    }
    
        //this function is to set the session
        public function do_findempView(){
        $this->session->sess_destroy();
        redirect('findempView');
    }

}
?>
