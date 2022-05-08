<?php
include("connect.php");  
if (isset($_GET['id'])) 
    {
        $kode= ($_GET["id"]);
    
        $query = "SELECT * FROM kos WHERE id_kos='$kode' ";
        $result = mysqli_query($koneksi, $query);
        if(!$result)
        {
          die ("Query Error: ".mysqli_errno($koneksi).
             " - ".mysqli_error($koneksi));
        }
        $id_kos = mysqli_fetch_assoc($result);
        if (!count($id_kos)) 
        {
              echo "<script>alert('Data tidak ditemukan pada database');window.location='bobot.php';</script>";
        }
    } 
    else 
    {
        echo "<script>alert('Masukkan data id.');window.location='bobot.php';</script>";
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- data tabel CSS -->
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <!-- data tabel CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-chosen.css">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>

    <div class="l-navbar" id="nav-bar" >
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> 
                    <i class='bx bx-layer nav_logo-icon'></i> 
                    <span class="nav_logo-name">Aplikasi Kos</span> 
                </a>
                <div class="nav_list"> 
                        <a href="home.php" class="nav_link"> 
                            <i class='bx bx-grid-alt nav_icon'></i> 
                            <span class="nav_name">Dashboard</span> 
                        </a>
                        <a href="daftarKos.php" class="nav_link active"> 
                            <i class='bx bx-home nav_icon'></i> 
                            <span class="nav_name">Daftar Kos</span> 
                        </a> 
                        <a href="bobot.php" class="nav_link"> 
                            <i class='bx bx-clipboard nav_icon'></i> 
                            <span class="nav_name">Bobot Kriteria</span> 
                        </a> 
                        <a href="nilai.php" class="nav_link"> 
                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                            <span class="nav_name">Hasil Nilai Topsis</span> 
                        </a> 
                        <a href="aboutUs.php" class="nav_link"> 
                            <i class='bx bx-laptop nav_icon'></i> 
                            <span class="nav_name">About Us</span> 
                        </a> 
                </div>
            </div> 
        </nav>
    </div>

    <div>
            <div class="row" >
                <nav aria-label="breadcrumb" style="margin-top:75px;">
                    <ol class="breadcrumb" style="background-color:#fff;">
                    <li class="me-3">
                        <a href="bobot.php" class="btn btn-sm" style="font-size: 17px;font-weight:600;color: #404444">Daftar Kos</a>
                    </li>
                    <li class="active" aria-current="page">
                        <a href="addBobot.php" class="btn btn-sm shadow-sm px-3" style="background-color: #ff7f5c; color: #fff; font-weight:600;font-size: 17px; border-radius: 10px;">Edit Kos</a>
                    </li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);border-radius: 10px;">
                            <div class="container-fluid">
                                <form action="editKosBE.php" method="POST">
                                    <div class="row">
                                        <div class="row g-3">
                                            <h5 align="center" style="margin-top:10px;margin-bottom:15px;">Edit Kos</h5> 
                                            
                                            <div class="col-md-4">
                                            <label for="id_kos">ID Kos</label>
                                            <input type="int" class="form-control" name="id_kos" readonly value="<?php echo $id_kos['id_kos']; ?>" required>
                                            </div>

                                            <div class="col-md-4">
                                            <label for="nama_kos">Nama Kos</label>
                                            <input type="text" class="form-control" name="nama_kos"  value="<?php echo $id_kos['nama_kos']; ?>" required>
                                            </div>

                                            <div class="col-md-4">
                                            <label for="nama_pemilik">Nama Pemilik</label>
                                            <input type="text" class="form-control" name="nama_pemilik"  value="<?php echo $id_kos['nama_pemilik']; ?>" required>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="no_telp">No Telp Pemilik</label>
                                            <input type="text" class="form-control" name="no_telp"  value="<?php echo $id_kos['no_telp']; ?>" required>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat"  value="<?php echo $id_kos['alamat']; ?>" required>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="fasilitas">Fasilitas</label>
                                            <select style="padding:5px 10px" class="chosen-select" name="fasilitas" required>
                                            <?php
                                            if ($id_kos['fasilitas']=="1"){
                                                $fasilitas = "Kasur, Lemari";
                                            }
                                            else if ($id_kos['fasilitas']=="2"){
                                                $fasilitas = "Kasur, Lemari, Meja";
                                            }
                                            else if ($id_kos['fasilitas']=="3"){
                                                $fasilitas = "Kasur, Lemari, Meja,TV";
                                            }
                                            else{
                                                $fasilitas = "Kasur, Lemari, Meja,TV, Wifi";
                                            }
                                            ?>
                                            <option readonly selected value="<?php echo $id_kos["fasilitas"]?>"><?=$fasilitas?></option>;
                                            <option value="1"><?php echo "Kasur, Lemari";?> </option>;
                                            <option value="2"><?php echo "Kasur, Lemari, Meja";?> </option>;
                                            <option value="3"><?php echo "Kasur, Lemari, Meja,TV";?> </option>;
                                            <option value="4"><?php echo "Kasur, Lemari, Meja,TV, Wifi";?> </option>;
                                            </select>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="biaya">Biaya</label>
                                            <select style="padding:5px 10px" class="chosen-select" name="biaya" required>
                                            <?php
                                            if ($id_kos['biaya']=="1"){
                                                $biaya = "Lebih dari Rp1.000.000";
                                            }
                                            else if ($id_kos['biaya']=="2"){
                                                $biaya = "Rp500.000 - Rp1.000.000";
                                            }
                                            else if ($id_kos['biaya']=="3"){
                                                $biaya = "Rp250.000 - Rp500.000";
                                            }
                                            else{
                                                $biaya = "Kurang dari Rp250.000";
                                            }
                                            ?>
                                            <option readonly selected value="<?php echo $id_kos["biaya"]?>"><?=$biaya?></option>;
                                            <option value="4"><?php echo "Kurang dari Rp250.000";?> </option>;
                                            <option value="3"><?php echo "Rp250.000 - Rp500.000";?> </option>;
                                            <option value="2"><?php echo "Rp500.000 - Rp1.000.000";?> </option>;
                                            <option value="1"><?php echo "Lebih dari Rp1.000.000";?> </option>;
                                            </select>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="keamanan">Keamanan</label>
                                            <select style="padding:5px 10px" class="chosen-select" name="keamanan" required>
                                            <?php
                                            if ($id_kos['keamanan']=="1"){
                                                $keamanan = "Tanggung Jawab Bersama";
                                            }
                                            else if ($id_kos['keamanan']=="2"){
                                                $keamanan = "Tinggal Bersama Pemilik Kos";
                                            }
                                            else if ($id_kos['keamanan']=="3"){
                                                $keamanan = "Penjaga Kos";
                                            }
                                            else{
                                                $keamanan = "Tersedia CCTV";
                                            }
                                            ?>
                                            <option readonly selected value="<?php echo $id_kos["keamanan"]?>"><?=$keamanan?></option>;
                                            <option value=""></option>;
                                            <option value="4"><?php echo "Tersedia CCTV";?> </option>;
                                            <option value="3"><?php echo "Penjaga Kos";?> </option>;
                                            <option value="2"><?php echo "Tinggal Bersama Pemilik Kos";?> </option>;
                                            <option value="1"><?php echo "Tanggung Jawab Bersama";?> </option>;
                                            </select>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="jarak">Jarak</label>
                                            <select style="padding:5px 10px" class="chosen-select" name="jarak" required>
                                            <?php
                                            if ($id_kos['jarak']=="1"){
                                                $jarak = ">1km";
                                            }
                                            else if ($id_kos['jarak']=="2"){
                                                $jarak = ">500 dan <=1km";
                                            }
                                            else if ($id_kos['jarak']=="3"){
                                                $jarak = ">250 dan <=500m";
                                            }
                                            else if ($id_kos['jarak']=="4"){
                                                $jarak = ">100 dan <=250m";
                                            }
                                            else{
                                                $jarak = "<=100m";
                                            }
                                            ?>
                                            <option readonly selected value="<?php echo $id_kos["jarak"]?>"><?=$jarak?></option>;
                                            <option value=""></option>;
                                            <option value="5"><?php echo "<=100m";?> </option>;
                                            <option value="4"><?php echo ">100 dan <=250m";?> </option>;
                                            <option value="3"><?php echo ">250 dan <=500m";?> </option>;
                                            <option value="2"><?php echo ">500 dan <=1km";?> </option>;
                                            <option value="1"><?php echo ">1km";?> </option>;
                                            </select>
                                            </div>
                                            <div align="right" class="col-12">
                                            <input class="btn btn-primary" type="submit" name="simpan" value="Save">
                                            <a class="btn btn-danger" href="?page=data_KK">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="footer">
        <p>Copyright &copy 2022 Aplikasi Kos. All rights reserved.</p>
    </div>

    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/chosenjquery.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        } );
    </script>
    <script>
      $(function() {
        $('.chosen-select').chosen();
      });
</script>
</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function(event) { 
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
});
</script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

