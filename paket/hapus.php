<?php
include '../koneksi.php';
$id = $_GET["id_paket"];

    $query = "DELETE FROM paket WHERE id_paket='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    if(!$hasil_query) {
die ("Gagal menghapus data: ".mysqli_errno($koneksi).
" - ".mysqli_error($koneksi));
    } else {
echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }