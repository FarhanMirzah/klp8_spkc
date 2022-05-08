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
                        <a href="home.php" class="nav_link"> 
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
                        <a href="aboutUs.php" class="nav_link active"> 
                            <i class='bx bx-laptop nav_icon'></i> 
                            <span class="nav_name">About Us</span> 
                        </a> 
                    </div>
            </div> 
        </nav>
    </div>

    <!--Container Main start-->
    <div class="height-100">
        <h5 style="margin-top:80px;margin-bottom:15px;">About Us</h5>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="
                        box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);
                        border-radius: 10px;">
                            <h2 class="mt-5"><p align="center">Aplikasi Kos</p></h2>
                            <p class="lead" align="center" style="margin:30px auto"><img src="images/kos.jpeg" align="center" style="border-radius: 10px" width="200"></p>
                            <br><p class="lead" align="center" style="font-weight: 400;">
                                Deskripsi
                            </p>
                            <p class="caption" align="justify">
                                Aplikasi Kos adalah aplikasi yang dibuat untuk membantu pengguna dalam pemilihan kos. Pada aplikasi ini tersedia banyak pilihan kos di sekitar Universitas Andalas. Kos akan dinilai berdasarkan empat kriteria yaitu fasilitas, biaya, keamanan, dan jarak.
                            </p>
                            <br><p class="lead" align="center" style="font-weight: 400;">
                                Sistem Penunjang Keputusan
                            </p>
                            <p class="caption" align="justify">
                                Sistem Penunjang Keputusan (SPK) adalah suatu sistem informasi yang spesifik yang ditujukan untuk membantu manajemen dalam mengambil keputusan yang berkaitan dengan persoalan yang bersifat semi terstruktur secara efektif dan efisien, serta tidak menggantikan fungsi pengambil keputusan dalam membuat keputusan. 
                            </p>
                            <br><p class="lead" align="center" style="font-weight: 400;">
                                Metode
                            </p>
                            <p class="caption" align="justify">
                                Metode yang digunakan adalah Technique For Others Preferences By Similarity To Ideal Solution (TOPSIS). TOPSIS menggunakan prinsip bahwa alternatif yang dipilih harus memiliki jarak terpendek dari solusi ideal positif dan memiliki jarak terjauh dari solusi ideal negatif dari titik geometris menggunakan jarak euclidean untuk menentukan kedekatan relatif antara alternatif ke solusi yang optimal.
                            </p>
                            <br><p class="lead" align="center" style="font-weight: 400;">
                                Kos
                            </p>
                            <p class="caption" align="justify">
                                Kost adalah sebuah jasa yang menawarkan sebuah kamar atau tempat untuk ditinggali dengan sejumlah pembayaran tertentu untuk setiap periode tertentu (umumnya pembayaran per bulan).
                            </p>
                            <br><p class="lead" align="center" style="font-weight: 400;">
                                Bahasa Pemrograman
                            </p>
                            <p class="caption" align="justify">
                                Bahasa Pemrograman yang digunakan adalah PHP. PHP merupakan kependekan rekursif dari PHP : Hypertext Preprocessor. Pertama kali diperkenalkan oleh Rasmus Lerdorf, seorang software engineer dari Greenland pada tahun 1994. 
                            </p>
                            <br><p class="lead" align="center" style="font-weight: 400;">
                                DBMS
                            </p>
                            <p class="caption" align="justify">
                                Database Management System (DBMS) adalah perangkat lunak untuk mengendalikan pembuatan, pemeliharaan, pengolahan, dan penggunaan data yang berskala besar. DBMS yang digunakan pada aplikasi ini adalah MySQL. MySQL merupakan DBMS yang paling banyak digunakan. MySQL merupakan software database open source yang paling populer di dunia yang memiliki kelebihan MySQL diantaranya sintaksnya yang mudah dipahami, didukung program-program umum seperti C, C++, Java, PHP, Python.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="footer" style="margin-top:610px">
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