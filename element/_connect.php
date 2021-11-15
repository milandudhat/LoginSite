<?php

    $servername = "localhost";
    $username  ="root";
    $password ="";
    $dbname = "users";


    $connect = mysqli_connect($servername,$username,$password,$dbname);
    if(!$connect){
        die("Error". mysqli_connect_error());
    }
        
?>