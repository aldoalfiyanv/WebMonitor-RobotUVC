<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
    <head>
    <title>Robotic Web Monitory | About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="bootstrap-4.5.3/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/robot.png" rel="shortcut icon">
    
    <style>
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
        }

        .title {
        color: grey;
        font-size: 18px;
        }

        .b {
        text-decoration: none;
        font-size: 22px;
        color: black;
        }

        button:hover, a:hover {
        opacity: 0.7;
        }
        
        body {
			background: url('assets/batik.png');
		}
    </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="home.php"><b>UVC-ROBOT</b></a>
            </div>
            <ul class="nav navbar-nav">
            <li ><a href="home.php">Home</a></li>
            <li ><a href="index.php">Table</a></li>
            <li class="active"><a href="about.php">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="card">
                    <img src="assets/Aldo.jpg" alt="pict" style="width:80%">
                    <h1>Aldo Alfiyan</h1>
                    <p class="title">Created Website</p>
                    <p>Politeknik Harapan Bersama</p>
                    <a href="twitter.com/aldoalfiyanv" class="b"><i class="fa fa-twitter"></i></a>
                    <a href="linkedin.com/aldoalfiyanv" class="b"><i class="fa fa-linkedin"></i></a>
                    <a href="facebook.com/Aldo Alfiyan" class="b"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>
        <br>
        <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
            <div class="container text-center">
            <small>2021 Copyright &copy; <b>Robot Pengantar Makan Dan UV-C</b></small>
            </div>
        </footer>
        </br>
    </body>
</html>