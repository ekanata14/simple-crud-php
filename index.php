<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB PRACTICE</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
        include "php/db_connect.php";
    ?>
    <div class="form-container">
        <h1>Register</h1>
        <form action="php/register.php" method="POST">
            <p>Name:</p>
            <input type="text" name="username">
            <p>Password:</p>
            <input type="password" name="password">
            <input type="submit" class="submit" value="REGISTER">
        </form>
    </div>
    <div class="form-container">
        <h1>Login</h1>
        <form action="php/login.php" method="POST">
            <p>Name:</p>
            <input type="text" name="username">
            <p>Password:</p>
            <input type="password" name="password">
            <input type="submit" class="submit" value="LOGIN">
        </form>
    </div>
    </div>
</body>
</html>