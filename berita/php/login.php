<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
        <h1>Welcome</h1>
        <form action="login.php" method="post">
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter your username">
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Enter your password">
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login">
        </form>
    </div>
</body>
</html>
<!--  
<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "login";

$conn = mysqli_connect($host, $user, $pass, $name);
 
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
  $query = mysqli_query($conn, $sql);

  $row = mysqli_num_rows($query);

  if ($row > 0) {
    header("location: ../index.php");
  } else {
      echo "Login Gagal";
  }
}


?> 


