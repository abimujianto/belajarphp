<?php
    include('koneksi.php');
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
<h1>DATA PELANGGAN</h1>
<a class="btn btn-primary" href="tambah.php">+ PELANGGAN</a>
</div>

<div class="table-responsive d-flex justify-content-center">
<table class="table table-bordered col-10">
<thead>
<tr>
<th>ID</th>
<th>NAMA</th>
<th>JENIS KELAMIN</th>
<th>ALAMAT</th>
<th>TELPON</th>
<th>AKSI</th>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM pelanggan ORDER BY id_pelanggan ASC";
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
<td><?php echo $row['id_pelanggan']; ?></td>
<td><?php echo $row['nama']; ?></td>
<td><?php echo $row['jenis_kelamin']; ?></td>
<td><?php echo $row['alamat']; ?></td>
<td><?php echo $row['telpon']; ?></td>
<td>
<a class="btn btn-light btn-sm" href="edit.php?id_pelanggan=<?php echo $row['id_pelanggan']; ?>">Edit</a> |
<a class="btn btn-light btn-sm" href="hapus.php?id_pelanggan=<?php echo $row['id_pelanggan']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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