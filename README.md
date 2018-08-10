# Simple-Session-Management-PHP
Simple Session Management PHP
Index.php
Contains simple login form and session.
<xmp><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
session_start();
if(isset($_SESSION['name'])){
echo "Welcome ".$_SESSION['name'];
echo '<br>';
echo '<a href="logout.php">Logout</a>';
}else{?>
<form action="logging.php" method="post" enctype="application/x-www-form-urlencoded">
<input type="text" name="username" placeholder="username" /><br />
<input type="password" name="password" placeholder="password" /><br />
<input type="submit" name="submit" value="Login" />
</form>
<?php } ?>
<script>
<?php 
if(isset($_GET['msg'])){
?>
alert('<?php echo $_GET['msg']; ?>');
<?php
}
?>
</script>
</body>
</html>
</xmp>

logging.php
which contains session and login authentication
<xmp><?php
ob_start();
if(isset($_POST['submit'])){
$username = trim($_POST['username']);
$password = trim($_POST['password']);
	if($username == "admin" && $password == "pass"){
		session_start();
		$_SESSION['name']= $username;
		header("Location: index.php?msg=Loggedin successfull");
	}else{
		header("Location: index.php?msg=Invalid Username or Password");
	}
}
?>
  </xmp>
  
  Logout.php
  <xmp>
  <?php
session_start();
if(isset($_SESSION['name'])){
unset($_SESSION['name']);
session_destroy();
header("Location: index.php?msg=Loggedout successfully");
}
?>
  </xmp>
