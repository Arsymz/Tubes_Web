
<!DOCTYPE html>
<html>
<head>
    <title>Ganti Password</title>
    <style>
        .form-container {
            padding: 10px;
            border: 1px solid #F1F1F1;
            width: 50%;
            margin: 0 auto;
            background-color: #FFFFFF;
        }
        .form-input {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            border: 1px solid #F1F1F1;
            font-size: 16px;
            font-family: sans-serif;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Ganti Password</h2>
    <form action="ganti_password.php" method="post">
        <div class="form-container">
            <label for="password_lama"><b>Password Lama</b></label>
            <input type="password" placeholder="Masukkan Password Lama" name="password_lama" class="form-input" id="password_lama" required>

            <label for="password_baru"><b>Password Baru</b></label>
            <input type="password" placeholder="Masukkan Password Baru" name="password_baru" class="form-input" id="password_baru" required>

            <label for="konfirmasi_password"><b>Konfirmasi Password</b></label>
            <input type="password" placeholder="Konfirmasi Password Baru" name="konfirmasi_password" class="form-input" id="konfirmasi_password" required>

            <button type="submit" name="ganti_password">Ganti Password</button>
        </div>
    </form>
</body>
</html>

<div class="back-button">
  <a href="javascript:history.go(-1)" class="back-link">
    <span class="back-icon">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg>
    </span>
    <span class="back-text">Kembali</span>
  </a>
</div>

<style>
  .back-button {
    position: absolute;
    left: 15px;
    top: 15px;
  }

  .back-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #0a0a0a;
  }

  .back-icon {
    width: 20px;
    height: 20px;
    margin-right: 8px;
  }
</style>