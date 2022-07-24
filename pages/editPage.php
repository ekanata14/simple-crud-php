<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB PRACTICE</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="form-container">
        <h1>Edit Data</h1>
        <form action="editPage.php" method="POST">
            <p>Name:</p>
            <input type="text" name="username" value="<?php echo $_GET['name']?>">
            <p>Password</p>
            <input type="password" name="password">
            <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>"> 
            <input type="submit" class="submit" value="Change" name="update">
        </form>
    </div>

    <?php
        include "../php/db_connect.php";

        if(isset($_POST["update"])){
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }  
    
            $uname = validate($_POST['username']);
            $pass = validate($_POST['password']);
            $id = validate($_POST["id"]);
            
            // USE BACKTICK FOR SELECTING THE DATA COLUMN!!!
            $edit_query = "UPDATE `user` SET `username` = '$uname', `password` = '$pass' WHERE `user`.`id` = '$id';";
            $edit_query_result = mysqli_query($connect_db, $edit_query);

            if($edit_query_result){
                echo "<script>
                    window.location.href='../pages/landingPage.php'
                    alert('Data Updated')
                </script>";
            } else{
                echo "<script>
                    window.location.href='../pages/landingPage.php'
                    alert('Data is not Updated')
                </script>";
            }
        }

?>

</body>
</html>