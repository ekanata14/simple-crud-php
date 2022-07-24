<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dreamerdream</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php
        include "../php/db_connect.php";
    ?>
    <h1>Dreamerdream</h1>
    <div class="form-container">
        <h1>Register</h1>
        <form action="../php/register.php" method="POST">
            <p>Name:</p>
            <input type="text" name="username">
            <p>Password:</p>
            <input type="password" name="password">
            <input type="submit" class="submit" value="REGISTER">
        </form>
    </div>
    <a href="../index.php">Already have an account?</a>
</body>
</html>