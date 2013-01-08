<?php $this->load->view ('header')?>

 <form name="input" action="<?php echo site_url('find/findempView') ?>" method="get">
	
	
	
            <h4> Search For Employess </h4> <br />
 First Name: <input type="text" name="firstname" id="firstname"><br>
 Last Name: <input type="text" name="lastname" id="lastname"><br>
 Department: <input type="text" name="department" id="department"><br>
 Job Title: <input type="text" name="title" id="title"><br>
 <input type="submit" id="search_submit" value="Search">
 
 <button> <a input type = "submit" href="<?php echo site_url('welcome/index') ?>">  Back To Home Page </a> </button>
	
 </form>
	
	
	
<?php $this->load->view ('footer')?>