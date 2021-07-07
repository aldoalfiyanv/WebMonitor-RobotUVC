<?php
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 5; URL=$url1");
    require("db.php");
    session_start();
    if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); }
?>
<html lang="en">
<head>
  <title>Robotic Web Monitory | Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="assets/robot.png" rel="shortcut icon">
  <style>
		body {
			background: url('assets/batik.png');
		}
    #wntable {
      border-collapse: collapse;
      width: 50%;
    }
    #wntable td, #wntable th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #wntable tr:nth-child(even){background-color: #f2f2f2;}
    #wntable tr:hover {background-color: #ddd;}
    #wntable th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #00A8A9;
      color: white;
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
      <li class="active"><a href="index.php">Table</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2><b>TABLE DATA ROBOT</b></h2>
  <p><i>Untuk Mengetahui Apakah Makanan Sudah Diambil Pasien Atau Tidak</i></p>     
  <div id="cards" class="cards" align="center">
          <table id="wntable" >
          <tr>
            <th><center>No</center></th>
            <th><center>Data</center></th>
            <th width="300px"><center>Waktu</center></th>
            <th><center>Keterangan</center></th>
          </tr>
          <?php
 
          $sql = mysqli_query($con, "SELECT * FROM datasensor ORDER BY id DESC");
          if(mysqli_num_rows($sql) == 0){ 
            echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
          }else{ // jika terdapat entri maka tampilkan datanya
            $no = 1; // mewakili data dari nomor 1
            while($row = mysqli_fetch_assoc($sql)){ // fetch query yang sesuai ke dalam array
              echo '
              <tr>
                <td>'.$no.'</td>
                <td>'. $row['data'].'</td>
                <td>'.$row['waktu'].'</td>
                <td>'. $_data = $row['data'];
                if ($_data > 0) 
                { 
                 echo '- Makanan Sudah Diambil';
                }  else  {
                 echo '- Makanan Belum Diambil';
                }'</td>
              </tr>
              ';
              $no++; // mewakili data kedua dan seterusnya
            }
          }
          ?>
        </table>
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
