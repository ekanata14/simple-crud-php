<?php

include "db_connect.php";

// Function to validate data
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}   

// Get the value from input
$username = validate($_POST["username"]);
$pass = validate($_POST["password"]);

// Select sql table from 
$sql_user_table_select = "SELECT * FROM user WHERE username='$username' AND password='$pass'";

// Send the sql_user_table_select to phpmyadmin/database query
$result = mysqli_query($connect_db, $sql_user_table_select);

// Fetch table data on phpmyadmin/database
$row = mysqli_fetch_assoc($result);

// Check if the data match with data on phpmyadmin/database
if($row['username'] === "admin" && $row['password'] === "admin"){
    echo "<script>window.location.href='../pages/adminPage.php'</script>";
} else if($row['username'] === $username && $row['password'] === $pass){
        echo "<script>window.location.href='../pages/landingPage.php'</script>";
} else{
    echo "<script>
        window.location.href='../index.php'
        alert('Username atau Password Salah')
    </script>";
}
?>