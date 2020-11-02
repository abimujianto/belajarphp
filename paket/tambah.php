<?php
  include('../koneksi.php');
  
?>
<!DOCTYPE html>
<html>
    <head>
    <title>MYINDIHOME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="text-center block-center">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../index.php">PELANGGAN</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="index.php">PAKET</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../langganan/index.php">LANGGANAN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../report/index.php">REPORT</a>
    </li>
  </ul>
</nav>

<div class="title">
<h1>TAMBAH DATA PAKET</h1>
</div>

<form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
<div class="box">
<div class="form-group">
<input class="form-control" placeholder="ID" type="text" name="id_paket"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Nama Paket" type="text" name="nama_paket"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Internet" type="text" name="internet"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Useetv" type="text" name="useetv"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Kategori" type="text" name="kategori"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Price" type="text" name="price"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Pajak" type="text" name="pajak"/>
</div>
<div>
<button class="btn btn-success" type="submit">SIMPAN</button>
</div>
</form>
</body>
</html>