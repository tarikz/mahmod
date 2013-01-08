<?php
class Searchmodel extends CI_Model {
	function __construct() {
		$this->load->database();
		parent::__construct();
	}
//research function for employess search by enter firstname,lastname,department and title the user need to enter one of them and get the resson        
 function search ($firstname,$lastname,$department,$title){
 
	$q = $this->db->select('employees.first_name AS firstname, employees.last_name AS lastname, titles.title AS jobtitle, departments.dept_name AS dept, departments.dept_no AS deptid')
			->select('IF(`dept_manager`.`emp_no` = `employees`.`emp_no`, 1, 0) AS ismanager', false)
			->from('employees')
			->join('dept_emp', 'dept_emp.emp_no = employees.emp_no')
			->join('departments', 'departments.dept_no = dept_emp.dept_no')
			->join('titles', 'titles.emp_no = employees.emp_no')
			->join('dept_manager', 'dept_manager.emp_no = dept_emp.emp_no','left')
			->where('titles.to_date', '9999-01-01')
			->where('dept_emp.to_date', '9999-01-01');
			if (!empty($firstname)) {
			$this->db->where('employees.first_name', $firstname);
			}
			if (!empty($lastname)) {
			$this->db->where('employees.last_name', $lastname);
			}
			if (!empty($department)) {
			$this->db->where('departments.dept_name', $department);
			}
			if (!empty($title)) {
			$this->db->where('titles.title', $title);
			}
		// count the number of resech result.and get the result in rows. 
		$resultq['rows'] = $q->get()->result();
		$resultq['num_rows'] = $q->count_all_results();
		return $resultq;
             }

}
             ?>
