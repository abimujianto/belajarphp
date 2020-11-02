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
<a class="btn btn-primary" href="tambah.php">+ LANGGANAN</a>
</div>

<div class="table-responsive d-flex justify-content-center">
<table class="table table-bordered col-10">
<thead>
<tr>
<th>ID</th>
<th>PELANGGAN ID</th>
<th>PAKET ID</th>
<th>TANGGAL</th>
<th>AKSI</th>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM langganan ORDER BY id ASC";
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
<td><?php echo $no; ?></td>
<td><?php echo $row['pelanggan_id']; ?></td>
<td><?php echo $row['paket_id']; ?></td>
<td><?php echo date("d-m-Y", strtotime($row['tanggal'])); ?></td>
<td>
<a class="btn btn-light btn-sm" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a class="btn btn-light btn-sm" href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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