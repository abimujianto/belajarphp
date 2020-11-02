<?php
include '../koneksi.php';

if (isset($_GET['id_paket'])) {

$id = ($_GET["id_paket"]);

$query = "SELECT * FROM paket WHERE id_paket='$id'";
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
<h1>EDIT DATA PAKET</h1>
</div>

<form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
<div class="box">
<div class="form-group">
<input class="form-control" readonly placeholder="ID" type="text" name="id_paket" value="<?php echo $data['id_paket']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Nama Paket" type="text" name="nama_paket" value="<?php echo $data['nama_paket']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Internet" type="text" name="internet" value="<?php echo $data['internet']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Useetv" type="text" name="useetv" required=""value="<?php echo $data['useetv']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Kategori" type="text" name="kategori" required="" value="<?php echo $data['kategori']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Price" type="text" name="price" required="" value="<?php echo $data['price'];?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Pajak" type="text" name="pajak" required="" value="<?php echo $data['pajak']; ?>"/>
</div>

<div>
<button class="btn btn-success" type="submit">SIMPAN</button>
</div>

</form>
</body>
</html>