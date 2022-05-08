<?php
include("connect.php"); 
$query = mysqli_query($koneksi, "SELECT max(id_kriteria) as kodeTerbesar FROM kriteria");
    $data = mysqli_fetch_array($query);
    $kode = $data['kodeTerbesar'];
    
    $urutan = (int) $kode;
    
    $urutan++;

    $kode = $urutan; 
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
                        <a href="daftarKos.php" class="nav_link"> 
                            <i class='bx bx-home nav_icon'></i> 
                            <span class="nav_name">Daftar Kos</span> 
                        </a> 
                        <a href="bobot.php" class="nav_link active"> 
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
                        <a href="bobot.php" class="btn btn-sm" style="font-size: 17px;font-weight:600;color: #404444">Bobot Kriteria</a>
                    </li>
                    <li class="active" aria-current="page">
                        <a href="addBobot.php" class="btn btn-sm shadow-sm px-3" style="background-color: #ff7f5c; color: #fff; font-weight:600;font-size: 17px; border-radius: 10px;">Add Bobot Kriteria</a>
                    </li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-12">
                    <div  class="card mb-4" style="border-radius: 10px; width:70%; margin-left:180px;">
                        <div class="card-body" style="box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);border-radius: 10px;">
                            <div class="container-fluid">
                                <form action="addBobotBE.php" method="POST">
                                    <div class="row">
                                        <div class="col">
                                            <h5 align="center" style="margin-top:10px;margin-bottom:15px;">Add Bobot Kriteria</h5>
                                            <div class="form-group">
                                            <label for="id_kriteria">ID Kriteria</label>
                                            <input type="int" class="form-control" readonly value="<?php echo $kode?>"  name="id_kriteria" required>
                                            </div>

                                            <div class="form-group">
                                            <label for="nama_kriteria">Nama Kriteria</label>
                                            <input type="text" class="form-control" name="nama_kriteria" required>
                                            </div>
                                            
                                            <div class="form-group">
                                            <label for="atribut">Atribut</label>
                                            <select style="padding:5px 10px" class="chosen-select" data-placeholder="Pilih Atribut" name="atribut" required>
                                            <option value=""></option>;
                                            <option value="1"><?php echo "Cost";?> </option>;
                                            <option value="2"><?php echo "Benefit";?> </option>;
                                            </select>
                                            </div>

                                            <div class="form-group">
                                            <label for="bobot_nilai">Bobot Nilai</label>
                                            <select style="padding:5px 10px" class="chosen-select" data-placeholder="Pilih Bobot Niai" name="bobot_nilai" required>
                                            <option value=""></option>;
                                            <option value="1"><?php echo "1";?> </option>;
                                            <option value="2"><?php echo "2";?> </option>;
                                            <option value="3"><?php echo "3";?> </option>;
                                            <option value="4"><?php echo "4";?> </option>;
                                            <option value="5"><?php echo "5";?> </option>;
                                            </select>
                                            </div>
                                            <div align="right" class="col-13">
                                            <input class="btn btn-primary" type="submit" name="simpan" value="Save">
                                            <a class="btn btn-danger" href="bobot.php">Cancel</a>
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

