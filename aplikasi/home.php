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
                        <a href="home.php" class="nav_link active"> 
                            <i class='bx bx-grid-alt nav_icon'></i> 
                            <span class="nav_name">Dashboard</span> 
                        </a>
                        <a href="daftarKos.php" class="nav_link"> 
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
        <h5 style="margin-top:80px;margin-bottom:15px;">Dashboard</h5>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="
                        box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);
                        border-radius: 10px;">
                            <h2 class="mt-5"><p align="center">Aplikasi Kos</p></h2>
                            <p class="lead" align="center">
                                SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN KOS TERBAIK DI SEKITAR UNIVERSITAS ANDALAS
                                <br>MENGGUNAKAN METODE TOPSIS     
                            </p>
                            <p class="lead" align="center" style="margin-bottom:50px"><img src="images/kos.jpeg" align="center" style="border-radius: 10px" width="200"></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="footer">
        <p>Copyright &copy 2022 Aplikasi Kos. All rights reserved.</p>
    </div>
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