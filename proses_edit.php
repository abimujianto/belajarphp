<?php
include 'koneksi.php';
$id_pelanggan = $_POST['id_pelanggan'];
$nama   = $_POST['nama'];
$jenis_kelamin     = $_POST['jenis_kelamin'];
$alamat    = $_POST['alamat'];
$telpon    = $_POST['telpon'];

$query  = "UPDATE pelanggan SET id_pelanggan = '$id_pelanggan', nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', telpon = '$telpon'";
$query .= "WHERE id_pelanggan = '$id_pelanggan'";
$result = mysqli_query($koneksi, $query);

if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
" - ".mysqli_error($koneksi));
} else {
echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
}