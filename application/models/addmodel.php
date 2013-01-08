<?php 

class ADDmodel extends CI_Model {
	function __construct() {
		$this->load->database();
		parent::__construct();
	}
 //is public function to add new employees to the database.      
public function add_employee($firstname, $lastname, $gender, $DOB, $department, $title, $salary){
	//arry for add employees
	$fields = array (
		'first_name' => $firstname,
		'last_name' => $lastname,
		'gender' => $gender,
		'birth_date' => $DOB,
		'hire_date' => date("dd-mm-yy"),
	);
        
	$this->db->set($fields); 
	$this->db->insert('employees');
        $employeeid = $this->db->insert_id();
        $this->addEmployees_Department($employeeid, $department);
	$this->addEmployee_Salary($employeeid, $salary);
	$this->addEmployees_Title($employeeid, $title);
    }
 //publice function for add a department to the database.           
public function addEmployees_Department($employeeid, $department){
          $fields = array (
		'emp_no' => $employeeid,
		'dept_no' => $department,
		'from_date' => date("dd-mm-yy"),
		'to_date' => '9999-01-01'
        );
		$this->db->set($fields); 
                $this->db->insert('dept_emp');
        }
//publice function for add a job title to the database. 
public function addEmployees_Title($employeeid, $title){
            $fields = array (
                'emp_no' => $employeeid,
                'title' => $title,
                'from_date' => date("dd-mm-yy"),
                'to_date' => '9999-01-01'
        );
		$this->db->set($fields); 
                $this->db->insert('titles');
 
        }
//publice function for add a salary to the database.   
public function addEmployee_Salary($employeeid, $salary){
           $fields = array (
                'emp_no' => $employeeid,
                'salary' => $salary,
                'from_date' => date("dd-mmm-yy"),
                'to_date' => '9999-01-01'
        );
		$this->db->set($fields); 
                $this->db->insert('salaries');
 
        }
 

//function to delete the employees        
public function delete_employee($employeeno){
$tables = array ('employees', 'dept_manager','dept_emp','titles','salaries');
$this->db->where('emp_no', $employeeno); 
$this->db->delete($tables);
}
}
 ?>

