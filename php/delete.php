<?php

include "db_connect.php";
$id = $_GET['delete'];
$delete_query = "DELETE FROM `user` WHERE `user` . `id` = '$id'";
$delete_query_result = mysqli_query($connect_db, $delete_query);

if($delete_query_result){
    echo "<script>
        window.location.href='../pages/landingPage.php'
        alert('The Account has been deleted')
    </script>";
} else{
    echo "<script>
        window.location.href='../pages/landingPage.php'
        alert('Error Deleting Account')
    </script>";
}
?>