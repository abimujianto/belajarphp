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
    <li class="nav-item">
      <a class="nav-link" href="../langganan/index.php">LANGGANAN</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="index.php">REPORT</a>
    </li>
  </ul>
</nav>

<div class="title">
<h1>REPORT</h1>
<h1>SALES INDIHOME</h1>
</div>

<form action="index.php" method="get">
<div class="row title">
<div class="col-7"></div>
<div class="col-3">
<input class="form-control col-12" name="search" placeholder="SEARCH" value="<?php
if(isset($_GET['search'])){
 $cari = $_GET['search'];
 echo "$cari";}?>">
</div>
<div class="col-1">
<input class="btn btn-secondary col-12" type="submit" value="Search">
</div>
</div>

<div class="table-responsive d-flex justify-content-center">
<table class="table table-bordered col-10">
<thead>
<tr>
<th>NO</th>
<th>PELANGGAN ID</th>
<th>NAMA PELANGGAN</th>
<th>PAKET ID</th>
<th>NAMA PAKET</th>
<th>KATEGORI</th>
<th>TANGGAL</th>
<th>PRICE</th>
<th>PAJAK</th>
</tr>
</thead>
<tbody>
<?php

if(isset($_GET['search'])){
  $cari = $_GET['search'];
  $result = mysqli_query($koneksi,"SELECT * FROM pelanggan, langganan, paket WHERE pelanggan_id = id_pelanggan AND paket_id = id_paket AND nama like '%".$cari."%'");    
 }else{
  $result = mysqli_query($koneksi,"SELECT * FROM langganan, pelanggan, paket WHERE pelanggan_id = id_pelanggan AND paket_id = id_paket ORDER BY id ASC");  
 }
 $no = 1;
 while($row = mysqli_fetch_array($result)){

?>
<tr>
<td><?php echo $no ?></td>
<td><?php echo $row['id_pelanggan']; ?></td>
<td><?php echo $row['nama']; ?></td>
<td><?php echo $row['id_paket']; ?></td>
<td><?php echo $row['nama_paket']; ?></td>
<td><?php echo $row['kategori']; ?></td>
<td><?php echo date("d-m-Y", strtotime($row['tanggal'])); ?></td>
<td>Rp.<?php echo number_format($row['price'], '0', ',', '.')?></td> 
<td><?php echo $row['pajak']; ?></td>
</tr>

<?php
$no++;
}
?>
</tbody>
</table>
</div>

<?php 
$query = mysqli_query($koneksi, "SELECT SUM(price + (price*0.1)) AS total FROM langganan, paket, pelanggan WHERE pelanggan_id = id_pelanggan AND paket_id = id_paket") or die(mysqli_error());
$fetch = mysqli_fetch_array($query);
?>

<div class="row title">
<div class="col-10 text-right">Total = Rp. <?php echo number_format($fetch['total'], '0', ',', '.')?>
</div>
</div>
</div>

</body>
</html>