<!DOCTYPE html>
<html>
  <head>
    <title>masukan berita terbaru</title>
    <style>
      body {
      font-family: Arial, Helvetica, sans-serif;
      }
      .container {
      width: 500px;
      padding: 20px;
      background-color: #F7F7F7;
      margin: auto;
      }

      #tema, #judul, #deskripsi{
        width: 480px;
      }

      form {
      width: 100%;
      margin: 0 auto;
      padding: 10px;
      }
      input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
      }
      input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      }
      input[type=submit]:hover {
      background-color: #45a049;
      }


    </style>
  </head>
  <body>
    <div class="container">
      <h2>Input Judul dan Tema</h2>
      <form action="beritaBaru.php" method="post">
        <label for="judul">Judul</label>
        <input type="text" id="judul" name="judul" placeholder="Masukkan Judul">
        <label for="tema">Tema</label>
        <textarea id="tema" name="tema" placeholder="Masukkan Tema" ></textarea>
        <label for="gambar">Gambar</label>
        <input type="file" id="gambar" name="gambar" placeholder="Masukkan Gambar">
        <br>
        <br>
        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" style="height:200px"></textarea>
        <label for="tanggal">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal">
        <input type="submit" name="aksi" value="tambah">
      </form>
    </div>
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
<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "input_berita";

$conn = mysqli_connect($host, $user, $pass, $name);
session_start();

if(isset($_POST['aksi']) && $_POST['aksi'] == 'tambah'){
  $judul = $_POST['judul'];
  $tema = $_POST['tema'];
  $gambar = $_POST['gambar'];
  $deskripsi = $_POST['deskripsi'];
  $tanggal = $_POST['tanggal'];
  
  $query = "INSERT INTO data(judul, tema, gambar, deskripsi, tanggal) 
            VALUES('$judul', '$tema', '$gambar', '$deskripsi', '$tanggal')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "Data berhasil disimpan.";
  } else {
    die("Query Failed: " . mysqli_error($conn));
  }
}
?>