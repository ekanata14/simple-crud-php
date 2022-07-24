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
$sql_user_table_select = "SELECT username, password FROM user";

// Fill the query in phpmyadmin
$result = mysqli_query($connect_db, $sql_user_table_select);

// Insert value from variable
$insert_sql = "INSERT INTO user(username, password) VALUES('$username', '$pass')";  

// Insert query code
$insert_sql_result = mysqli_query($connect_db, $insert_sql);

echo "<script>
window.location.href='../index.php'
alert('Your account has been created');
</script>";

?>