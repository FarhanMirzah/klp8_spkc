<?php
include("connect.php"); 

$id_kriteria=$_POST['id_kriteria'];
$nama_kriteria=$_POST['nama_kriteria'];
$atribut=$_POST['atribut'];
$bobot_nilai=$_POST['bobot_nilai'];
    
$query = mysqli_query($koneksi, "INSERT INTO kriteria (id_kriteria, nama_kriteria, atribut, bobot_nilai) VALUES('$id_kriteria', '$nama_kriteria', '$atribut', '$bobot_nilai')");  
            
if($query)  
{  
    echo "<script>alert('Data berhasil ditambahkan');window.location='bobot.php';</script>";

}
else
{
    echo "<script>alert('Data gagal ditambahkan');window.location='addBobot.php';</script>";
}
?>