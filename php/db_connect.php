<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_practice";

    $connect_db = mysqli_connect($host, $username, $password, $database);

    if(!$connect_db){
        die(mysqli_connect_error);
    }
?>