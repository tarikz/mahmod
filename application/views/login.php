<!DOCTYPE HTML>
<html>
<head>
    <title>HR Login </title>
</head>
<?php $this->load->view ('header')?>
       <center><h3>
        <a href="<?php echo site_url('find/index') ?>">  Search </a> &nbsp; &nbsp; 
       <a href="<?php echo site_url('welcome/index') ?>"> Home </a>
       </center></h3>
<body>
<h3>Login Please!!</h3>
        <?php echo validation_errors(); ?>
       
	<?php echo form_open('LoginController/checkLogin'); ?>

    Username: 
	<input type="text" name="username"/> <br /> 
    Password: 
	<input type="text" name="password"/> <br />
	
    <input type="submit" value="Login" name="submit"/>
    	     
    

<?php include_once('footer.php'); ?>
	</body>
</html>