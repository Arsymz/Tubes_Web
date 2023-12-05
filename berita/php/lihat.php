<!DOCTYPE html>
<html>
<head>
  <title>Data</title>
  <link rel="stylesheet"  href="login.css">
</head>
<body>
  <h1>Data</h1>
  <table>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Tema</th>
      <th>Gambar</th>
      <th>Deskripsi</th>
      <th>Tanggal</th>
    </tr>
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "input_berita";

    // Buat koneksi
    $conn = mysqli_connect($host, $user, $pass, $name);

    // Periksa koneksi
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $no = 1;
    // Ubah query untuk mengambil data dari tabel
    $ambildata = mysqli_query($conn, "SELECT * FROM data");

    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
        <td>$no</td>
        <td>$tampil[judul]</td>
        <td>$tampil[tema]</td>
        <td>$tampil[gambar]</td>
        <td>$tampil[deskripsi]</td>
        <td>$tampil[tanggal]</td>
        </tr>
        ";
        $no++;
    }

    // Tutup koneksi
    mysqli_close($conn);
    ?>
  </table>
</body>
</html>
