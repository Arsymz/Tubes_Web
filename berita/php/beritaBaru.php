<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berita Terbaru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Berita Terbaru</h1>

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

    // Cek apakah ada data baru
    if (isset($_POST['aksi']) && $_POST['aksi'] == 'tambah') {
        $judul = $_POST['judul'];
        $tema = $_POST['tema'];
        $gambar = $_POST['gambar'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal = $_POST['tanggal'];

        // Masukkan data baru ke database
        $query = "INSERT INTO data(judul, tema, gambar, deskripsi, tanggal) 
                    VALUES('$judul', '$tema', '$gambar', '$deskripsi', '$tanggal')";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Failed: " . mysqli_error($conn));
        }
    }

    // Ambil data terbaru dari tabel
    $ambildata = mysqli_query($conn, "SELECT * FROM data ORDER BY tanggal DESC LIMIT 1");

    // Loop untuk menampilkan data
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <div class='berita'>
            <h2>$tampil[judul]</h2>
            <p> $tampil[tanggal]</p>
            <img src='$tampil[gambar]'>
            <p>$tampil[tema]</p>
            <p>$tampil[deskripsi]</p>
        </div>
        ";
    }

    // Tutup koneksi
    mysqli_close($conn);
    ?>

</body>
</html>
