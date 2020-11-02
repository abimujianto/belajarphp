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
    <li class="nav-item">
<a class="nav-link" href="../paket/index.php">PAKET</a>
    </li>
    <li class="nav-item active">
<a class="nav-link" href="index.php">LANGGANAN</a>
    </li>
    <li class="nav-item">
<a class="nav-link" href="../report/index.php">REPORT</a>
    </li>
</ul>
</nav>

<div class="title">
<h1>DATA LANGGANAN</h1>
<form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >

<div class="box">
<div class="form-group">
<input class="form-control" placeholder="ID" type="text" name="id"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Pelanggan ID" type="text" name="pelanggan_id"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Paket ID" type="text" name="paket_id"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Tahun, Bulan, Hari" type="text" name="tanggal"/>
</div>

<div>
<button class="btn btn-success" type="submit">SIMPAN</button>
</div>
</div>
</form>
</body>
</html>