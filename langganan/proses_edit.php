<?php
include '../koneksi.php';
$id = $_POST['id'];
$pelanggan_id   = $_POST['pelanggan_id'];
$paket_id     = $_POST['paket_id'];
$tanggal    = $_POST['tanggal'];

$query  = "UPDATE langganan SET id = '$id', pelanggan_id = '$pelanggan_id', paket_id = '$paket_id', tanggal = '$tanggal'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
" - ".mysqli_error($koneksi));
} else {
echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
}