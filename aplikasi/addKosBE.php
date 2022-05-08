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

$query = "INSERT INTO kos (id_kos, nama_kos, nama_pemilik, no_telp, alamat, fasilitas, biaya, keamanan, jarak) 
VALUES ('$id_kos','$nama_kos','$nama_pemilik','$no_telp','$alamat','$fasilitas','$biaya','$keamanan','$jarak')";

$query2 = "INSERT INTO analisa (id_kos, id_kriteria, nilai) VALUES 
            ($id_kos, 1, $fasilitas),
            ($id_kos, 2, $biaya),
            ($id_kos, 3, $keamanan),
            ($id_kos, 4, $jarak)";

$koneksi->query($query);
if ($koneksi->query($query2) === TRUE) {
    echo "<script>alert('Data berhasil ditambah');window.location='daftarKos.php';</script>";
}
?>  
