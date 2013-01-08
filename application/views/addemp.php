<html> 
<body>
    <!-- this is the form view for add employees by using first name,last name,Gender,Date Of Brith,Department,Title,Salary.-->
    <form action="<?php echo site_url('add/index');?>" method='post' name='process'>
        <?php $this->load->view ('header')?>
             <center> <h3>
       <a href="<?php echo site_url('HomeController/index') ?>">  Home  </a> &nbsp; &nbsp;
       <a href="<?php echo site_url('delete/index') ?>">  Delete Employess  </a> &nbsp; &nbsp; 
       <a href="<?php echo site_url('find/index') ?>">  Search </a> &nbsp; &nbsp; 
       <a href="<?php echo site_url('welcome/index') ?>"> Logout </a>
 </h3> </center> 
        
        <h4>Add New Employees:</h4><br />            
            
           First Name:
            <input type="text" name ="firstname" id ="firstname" placeholder ="firstname" /><br />
         
	   Last Name:
            <input type ="text" name ="lastname" id ="lastname" placeholder ="lastname" /><br />
        
            Gender:
                    <input type ="radio" name ="gender" value ="Male" >Male
                    <input type ="radio" name ="gender" value ="Female">Female <br />
		
	    Date Of Birth:
            <input type ="date" name ="dateofbirth"><br />
			
	    Department:
             <input type ="text" name ="department" id ="department" placeholder ="department" /><br />
			
	    Title:
            <input type ="text" name ="title" id ="title" placeholder ="title" /><br />
			
	    Salary:
            <input type ="text" name ="salary" id ="salary" placeholder="salary"><br />
                                      
            <input type="submit" value='Add New Employee' >
            <input type = "submit" value="Clare" onclick="reset();">  
 
        </form>
 <?php include_once('footer.php'); ?>
</html></body>

