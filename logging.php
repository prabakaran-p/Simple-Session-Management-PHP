<?php
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