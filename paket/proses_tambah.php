<?php
include '../koneksi.php';

$id = $_POST['id_paket'];
$nama_paket   = $_POST['nama_paket'];
$internet     = $_POST['internet'];
$useetv    = $_POST['useetv'];
$kategori    = $_POST['kategori'];
$price    = $_POST['price'];
$pajak    = $_POST['pajak'];

$query  = "INSERT INTO paket (id_paket, nama_paket, internet, useetv, kategori, price, pajak) VALUES ('$id', '$nama_paket', '$internet', '$useetv', '$kategori', '$price', '$pajak')";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                        " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }