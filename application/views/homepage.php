<!DOCTYPE HTML>
<html>
<head>
    <title>Login System </title>
</head>
<body>
	
      <?php include_once('header.php'); ?>
     <center> <h3>
       <a href="<?php echo site_url('Add/index') ?>">  Add New Employess  </a> &nbsp; &nbsp;
       <a href="<?php echo site_url('delete/index') ?>">  Delete Employess  </a> &nbsp; &nbsp; 
       <a href="<?php echo site_url('find/index') ?>">  Search </a> &nbsp; &nbsp; 
       <a href="<?php echo site_url('welcome/index') ?>"> Logout </a>
 </h3> </center> 

<?php include_once('footer.php'); ?>
	</body>
</html>