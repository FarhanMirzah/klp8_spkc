<?php
include("connect.php");

$id_kriteria=$_POST['id_kriteria'];
$nama_kriteria=$_POST['nama_kriteria'];
$atribut=$_POST['atribut'];
$bobot_nilai=$_POST['bobot_nilai'];

$query = mysqli_query($koneksi, "UPDATE kriteria SET
    id_kriteria='$id_kriteria',
    nama_kriteria= '$nama_kriteria',
    atribut= '$atribut', 
    bobot_nilai='$bobot_nilai'
    WHERE id_kriteria='$id_kriteria'");

if($query)  
{  
    echo "<script>alert('Data berhasil diupdate');window.location='bobot.php';</script>";

}
else
{
    echo "<script>alert('Data gagal ditupdate');window.location='editBobot.php';</script>";
}
?>