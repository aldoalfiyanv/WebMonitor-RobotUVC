<?php

    //Variabel database
    $con = mysqli_connect("localhost","root","","database"); //localhost,username,password,nama database

    // Prepare the SQL statement
    
    $result = mysqli_query ($con,"INSERT INTO datasensor (data) VALUES ('".$_GET["data"]."')");    
    
    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($con));
        }  
?>