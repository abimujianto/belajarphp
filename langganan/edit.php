<?php
include '../koneksi.php';

if (isset($_GET['id'])) {

    $id = ($_GET["id"]);

    $query = "SELECT * FROM langganan WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
    die ("Query Error: ".mysqli_errno($koneksi).
    " - ".mysqli_error($koneksi));
    }

    $data = mysqli_fetch_assoc($result);
if (!count($data)) {
echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
}
} else {
echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}

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
<h1>EDIT DATA LANGGANAN</h1>
</div>

<form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
<div class="box">

<div class="form-group">
<input class="form-control" readonly placeholder="ID" type="text" name="id" value="<?php echo $data['id']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Paket ID" type="text" name="paket_id" value="<?php echo $data['paket_id']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Pelanggan ID" type="text" name="pelanggan_id" value="<?php echo $data['pelanggan_id']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Tanggal" type="text" name="tanggal" value="<?php echo $data['tanggal']; ?>"/>
</div>

<div>
<button class="btn btn-success" type="submit">SIMPAN</button>
</div>
</div>
</form>
</body>
</html>