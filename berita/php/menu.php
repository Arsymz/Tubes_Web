
<style>
  body {
    padding: 0;
    margin: 0;
    font-family: sans-serif;
  }
  #navbar {
    width: 100%;
    height: 50px;
    background-color: #2f3640;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  #navbar .nav-kiri {
    width: auto;
    padding: 0 15px;
  }
  #navbar .nav-kiri a {
    font-size: 14px;
    color: #ecf0f1;
    text-decoration: none;
    padding: 0 10px;
  }
  #navbar .nav-kanan {
    width: auto;
    padding: 0 15px;
  }
  #navbar .nav-kanan a {
    font-size: 14px;
    color: #ecf0f1;
    text-decoration: none;
    padding: 0 10px;
  }
  #navbar .nav-kanan a:hover {
    border-bottom: 2px solid #3498db;
  }
</style>

<div id="navbar">
  <div class="nav-kiri">
    <a href="isiberita.php">Input</a>
    <a href="gantipass.php">Ganti Pass</a>
    <a href="lihat.php">lihat data</a>
    <a href="login2.php">Logout</a>
  </div>
  <div class="nav-kanan">
    <a href="../index.html">Beranda</a>
  </div>
</div>