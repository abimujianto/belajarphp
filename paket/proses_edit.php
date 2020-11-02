<?php
include '../koneksi.php';
$id = $_POST['id_paket'];
$nama_paket   = $_POST['nama_paket'];
$internet     = $_POST['internet'];
$useetv    = $_POST['useetv'];
$kategori    = $_POST['kategori'];
$price    = $_POST['price'];
$pajak    = $_POST['pajak'];

$query  = "UPDATE paket SET id_paket = '$id', nama_paket = '$nama_paket', internet = '$internet', useetv = '$useetv', kategori = '$kategori', price = '$price', pajak = '$pajak'";
$query .= "WHERE id_paket = '$id'";
$result = mysqli_query($koneksi, $query);

if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
" - ".mysqli_error($koneksi));
} else {
echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
}