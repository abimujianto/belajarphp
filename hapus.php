<?php
include 'koneksi.php';
$id_pelanggan = $_GET["id_pelanggan"];

    $query = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan' ";
    $hasil_query = mysqli_query($koneksi, $query);

    if(!$hasil_query) {
die ("Gagal menghapus data: ".mysqli_errno($koneksi).
" - ".mysqli_error($koneksi));
    } else {
echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }