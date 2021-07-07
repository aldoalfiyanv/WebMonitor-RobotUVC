<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
    <head>
    <title>Robotic Web Monitory | Home </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="bootstrap-4.5.3/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/robot.png" rel="shortcut icon">
    <style>
    .carousel-item {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }
     #sticky-footer {
        flex-shrink: none;
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
            <li class="active"><a href="home.php">Home</a></li>
            <li ><a href="index.php">Table</a></li>
            <li ><a href="about.php">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
        </nav>

        <div class="container">
            <div class="jumbotron">
                <h1><b>SELAMAT DATANG</b></h1>      
                <p>Sistem Web Pada Robot  Sterilisasi Dengan UV-C Untuk Ruang Isolasi COVID-19 Dan Pengantar Makan Pasien Berbasis <i>NodeMCU ESP 8266</i> </p>
            </div>   
        </div>

        <div class="container"> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <div class="item active">
                <img src="assets/covid.png" alt="1" style="width:100%;">
            </div>

            <div class="item">
                <img src="assets/robot.jpg" alt="2" style="width:100%;">
            </div>
            
            <div class="item">
                <img src="assets/phb.jpg" alt="3" style="width:100%;">
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
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