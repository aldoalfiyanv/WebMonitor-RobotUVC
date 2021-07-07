<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Robotic Web Monitory | Log In</title>
	<link rel="stylesheet" href="css/style.css" />
	<link href="bootstrap-4.5.3/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/robot.png" rel="shortcut icon">
	<style>
		body {
			background: url('assets/batik.png');
			color: #FFD700;
		}
	</style>
</head>
<body>
	<?php
	require('db.php');
	session_start();
	// If form submitted, insert values into the database.
	if (isset($_POST['username'])){
			// removes backslashes
		$username = stripslashes($_REQUEST['username']);
			//escapes special characters in a string
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		//Checking is user existing in the database or not
			$query = "SELECT * FROM `users` WHERE username='$username'
	and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
			if($rows==1){
			$_SESSION['username'] = $username;
				// Redirect user to index.php
			header("Location: home.php");
			}else{
		echo "<div class='form'>
	<h3>Username/password is incorrect.</h3>
	<br/>Click here to <a href='login.php'>Login</a></div>";
		}
		}else{
	?>
<div class="container">
	<div class="row">
        <div class="card">
			<div class="form">
			<h1><center><b>LOGIN</b><center></h1>
			<center><img src="assets/phb.png" class="rounded" alt="phb"><center>
			<form action="" method="post" name="login">
			<input type="text" name="username" placeholder="Username" required />
			<input type="password" name="password" placeholder="Password" required />
			<br>
			<input name="submit" type="submit" value="Login" />
			</form>
			<p><a href='registration.php'>Sign Up ?</a></p>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</body>
</html>
