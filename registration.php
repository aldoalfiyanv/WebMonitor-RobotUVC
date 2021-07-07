<!DOCTYPE html>
<html>
        <meta charset="utf-8">
        <title>Robotic Web Monitory | Sign Up</title>
        <link rel="stylesheet" href="css/style.css" />
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
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

<div class="form">
        <h2><center><b>REGISTER ACCOUNT</b></center></h2>
        <center><img src="assets/phb.png" class="rounded" alt="phb"><center>
        <form name="registration" action="" method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" />
        <p><a href='login.php'>Sign In ?</a></p>
        </form>
</div>
<?php } ?>
</body>
</html>
