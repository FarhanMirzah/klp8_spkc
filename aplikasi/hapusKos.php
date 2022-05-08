<?php
    include 'connect.php';
    
    $id_kos= $_GET["id"];

    $query = "DELETE FROM kos WHERE id_kos='$id_kos' ";
    $hasil_query = mysqli_query($koneksi, $query);

    $query2 = "DELETE FROM analisa WHERE id_kos='$id_kos' ";
    $hasil_query2 = mysqli_query($koneksi, $query2);

    if(!$hasil_query || !$hasil_query2) 
    {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } 
    else 
    {
      echo "<script>alert('Data berhasil dihapus');window.location='daftarKos.php';</script>";
    }
