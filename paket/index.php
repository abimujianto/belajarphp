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
<h1>DATA PAKET</h1>
<a class="btn btn-primary" href="tambah.php">+ PAKET</a>
</div>

<div class="table-responsive d-flex justify-content-center">
<table class="table table-bordered col-10">
<thead>
<tr>
<th>ID</th>
<th>NAMA PAKET</th>
<th>INTERNET</th>
<th>USEE TV</th>
<th>KATEGORI</th>
<th>PRICE</th>
<th>PAJAK</th>
<th>AKSI</th>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM paket ORDER BY id_paket ASC";
$result = mysqli_query($koneksi, $query);
if(!$result){
die ("Query Error: ".mysqli_errno($koneksi).
" - ".mysqli_error($koneksi));
}
$no = 1;
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['id_paket']; ?></td>
<td><?php echo $row['nama_paket']; ?></td>
<td><?php echo $row['internet']; ?></td>
<td><?php echo $row['useetv']; ?></td>
<td><?php echo $row['kategori']; ?></td>
<td>Rp.<?php echo number_format($row['price'], '0', ',', '.')?></td> 
<td><?php echo $row['pajak']; ?></td>
<td>
<a class="btn btn-light btn-sm" href="edit.php?id_paket=<?php echo $row['id_paket']; ?>">Edit</a> |
<a class="btn btn-light btn-sm" href="hapus.php?id_paket=<?php echo $row['id_paket']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
</td>
</tr>

<?php
$no++;
}
?>
</tbody>
</table>
</body>
</html>