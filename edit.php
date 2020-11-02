<?php
include 'koneksi.php';

if (isset($_GET['id_pelanggan'])) {

    $id_pelanggan = ($_GET["id_pelanggan"]);

    $query = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
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
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="text-center block-center">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">PELANGGAN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="paket/index.php">PAKET</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="langganan/index.php">LANGGANAN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="report/index.php">REPORT</a>
    </li>
  </ul>
</nav>
<div class="title">
<h1>EDIT DATA PELANGGAN</h1>
</div>

<form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
<div class="box">
<div class="form-group">
<input class="form-control" readonly placeholder="ID" type="text" name="id_pelanggan" value="<?php echo $data['id_pelanggan']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Nama" type="text" name="nama" value="<?php echo $data['nama']; ?>"/>
</div>
<div class="form-group">
<?php $jk = $data['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($jk == 'Laki-Laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>


</div>
<div class="form-group">
<input class="form-control" placeholder="Alamat" type="text" name="alamat" required=""value="<?php echo $data['alamat']; ?>"/>
</div>
<div class="form-group">
<input class="form-control" placeholder="Telpon" type="text" name="telpon" required="" value="<?php echo $data['telpon']; ?>"/>
</div>

<div>
<button class="btn btn-success" type="submit">SIMPAN</button>
</div>
</div>
</form>
</body>
</html>