<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- <link rel="stylesheet" href="../style/landingPage.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
              <a class="navbar-brand" href="#">Dreamerdream</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
              </div>
          </div>
      </nav>
      <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Admin Page</h1>
            <p class="lead">Admin Page, edit, delete and manage user datas</p>
            <hr class="my-4">
            <p>If you want to make an account again, please click the button below</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="../index.php" role="button">Register or Login?</a>
            </p>
        </div>
      </div>

      <?php
        include "../php/db_connect.php";
        $sqlQueryTable = "SELECT * FROM user";
        $showDataQuery = mysqli_query($connect_db, $sqlQueryTable);

        if(!$showDataQuery){
          die("error found" . mysqli_error($connect_db));
        }
        echo "
        <div class='container'>
        <table class='table'>
          <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        ";

        while($row = mysqli_fetch_array($showDataQuery)){
          echo "
            <tr>
              <td>".$row["username"]."</td>
              <td>".$row["password"]."</td>
              <td><a href='editPage.php?edit=$row[id]&name=$row[username]'>Edit</a></td>
              <td><a href='../php/delete.php?delete=$row[id]'>Delete</a></td>
            </tr>
          ";
        }

        echo "
          </table>
        </div>
        ";
      ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>