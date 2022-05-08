<?php
    include 'connect.php';
    
    $id_kriteria = $_GET["id"];

    $query = "DELETE FROM kriteria WHERE id_kriteria='$id_kriteria' ";
    $hasil_query = mysqli_query($koneksi, $query);

    if(!$hasil_query) 
    {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } 
    else 
    {
      echo "<script>alert('Data berhasil dihapus');window.location='bobot.php';</script>";
    }
