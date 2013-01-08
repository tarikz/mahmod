<html>
    <body>
        <?php $this->load->view ('header')?>
        <?php echo validation_errors() ?>
     <center> <h3>
       <a href="<?php echo site_url('HomeController/index') ?>"> Home  </a> &nbsp; &nbsp; 
       <a href="<?php echo site_url('Add/index') ?>">  Add New Employess  </a> &nbsp; &nbsp;
       <a href="<?php echo site_url('find/index') ?>">  Search </a> &nbsp; &nbsp; 
       <a href="<?php echo site_url('welcome/index') ?>"> Logout </a>
 </h3> </center> 
<form action="<?php echo site_url('delete/index');?>" method='post' name='process'>
            <h4>Delete Employee</h4>
            <br />            
            Employee Number:
            <input type ="text" name ="employeenoumber" id ="employeenumber" placeholder ="Employee Number"  /><br />
         
            <input type="submit" value='Delete Employee' >
            <input type = "submit" value="Clare" onclick="reset();">           
<?php include_once('footer.php'); ?>       
</form>
    </div>
        
        
        
        
        
        
        
    </body>
    
    
    
    
</html>