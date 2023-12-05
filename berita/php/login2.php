<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="login.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>selamat datang</h1>
        <form action="login2.php" method="post">
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

<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "login";

$conn = mysqli_connect($host, $user, $pass, $name);
    session_start();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
      
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
        $query = mysqli_query($conn, $sql);
      
        $row = mysqli_num_rows($query);
      
        if ($row > 0) {
          header("location: menu.php");
        } else {
            echo "Login Gagal";
        }
      }
?>

