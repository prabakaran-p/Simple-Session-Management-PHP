<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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