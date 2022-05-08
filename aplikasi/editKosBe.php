<?php
include("connect.php"); 

$id_kos=$_POST['id_kos'];
$nama_kos=$_POST['nama_kos'];
$nama_pemilik=$_POST['nama_pemilik'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];
$fasilitas=$_POST['fasilitas'];
$biaya=$_POST['biaya'];
$keamanan=$_POST['keamanan'];
$jarak=$_POST['jarak'];
    
$query = "UPDATE kos SET
    id_kos='$id_kos',
    nama_kos='$nama_kos', 
    nama_pemilik='$nama_pemilik', 
    no_telp='$no_telp',
    alamat='$alamat', 
    fasilitas='$fasilitas', 
    biaya='$biaya', 
    keamanan='$keamanan',
    jarak='$jarak'
    WHERE id_kos='$id_kos'";

$query2 = "UPDATE analisa SET nilai = ( CASE
   WHEN id_kos = '$id_kos' AND id_kriteria = 1 then '$fasilitas'
   WHEN id_kos = '$id_kos' AND id_kriteria = 2 then '$biaya'
   WHEN id_kos = '$id_kos' AND id_kriteria = 3 then '$keamanan'
   WHEN id_kos = '$id_kos' AND id_kriteria = 4 then '$jarak'
   END )";

    $koneksi->query($query);
    if ($koneksi->query($query2) === TRUE) {
        echo "<script>alert('Data berhasil diupdate');window.location='daftarKos.php';</script>";
    }
?> 