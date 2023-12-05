<?php
include 'koneksi.php';

$signupSuccess = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO sign_up (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Setelah berhasil sign up, atur variabel signupSuccess menjadi true
        $signupSuccess = true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            border: none;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Stil tambahan untuk pesan selamat datang */
        .welcome-message {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 16px;
            text-align: center;
            display: <?php echo $signupSuccess ? 'flex' : 'none'; ?>;
            flex-direction: column;
            align-items: center;
        }

        .welcome-message button {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            border: none;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .welcome-message button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Pesan selamat datang -->
    <div class="welcome-message">
        <p>Selamat, Anda telah berhasil mendaftar!</p>
        <button onclick="window.location.href='login.php'">OK</button>
    </div>

    <form action="" method="post">
        <h2>Sign Up</h2>

        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Sign Up">
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </form>

    <script>
        // Periksa variabel signupSuccess untuk menampilkan pesan selamat datang setelah sign up
        const signupSuccess = <?php echo $signupSuccess ? 'true' : 'false'; ?>;

        if (signupSuccess) {
            document.querySelector('.welcome-message').style.display = 'flex';
        }
    </script>
</body>
</html>
