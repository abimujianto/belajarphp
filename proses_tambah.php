<?php
include 'koneksi.php';

  $id = $_POST['id_pelanggan'];
  $nama = $_POST['nama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $telpon = $_POST['telpon'];

  $query = "INSERT INTO pelanggan (id_pelanggan, nama, jenis_kelamin, alamat, telpon) VALUES ('$id', '$nama', '$jenis_kelamin', '$alamat', '$telpon')";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                        " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }