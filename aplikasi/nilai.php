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
    <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap4.min.js"></script>
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
                        <a href="nilai.php" class="nav_link  active"> 
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
        <h5 style="margin-top:80px;margin-bottom:15px;">Hasil Perhitungan</h5>
        <div class="row">
            <div class="">
                <div class="card mb-4" style="border-radius: 10px;">
                    <div class="card-body" style="
                        box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);
                        border-radius: 10px;">
                        <?php

                        include("connect.php");
                        ?>
                        <script src="js/jquery.min.js"></script>
                        <script src="js/bootstrap4.min.js"></script>
                        <div class="page-wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">      
                                            <?php
                                                function jml_kriteria(){    
                                                        global $koneksi;
                                                                $sql = "SELECT * FROM kriteria";
                                                                $query =  $koneksi->query($sql);
                                                                $count = mysqli_num_rows($query);
                                                            return $count;  
                                                        }

                                                        function get_kriteria(){
                                                            global $koneksi;
                                                                $kriteria = "SELECT * FROM kriteria";
                                                                $result = $koneksi->query($kriteria);
                                                                $i=1;
                                                                while ($dataakriteria = $result->fetch_assoc())
                                                                {
                                                                    $kri[$i] = $dataakriteria['nama_kriteria'];
                                                                    $i++;
                                                                }        
                                                            return $kri;
                                                        }
                        
                                                        function jml_alternatif(){  
                                                            global $koneksi;
                                                                $sql = "SELECT * FROM kos GROUP BY id_kos";
                                                                $query = $koneksi->query($sql);
                                                                $alternatif = mysqli_num_rows($query);
                                                            return $alternatif;
                                                        }
                        
                                                        function get_alt_name(){
                                                            global $koneksi;        
                                                                $alternatif = "SELECT * FROM kos";
                                                                $result = $koneksi->query($alternatif);
                                                                $i=0;
                                                                while ($dataalternatif = $result->fetch_array())
                                                                {
                                                                    $alt[$i] = $dataalternatif['nama_pemilik'];
                                                                    $i++;
                                                                }
                                                            return $alt;
                                                        }
                        
                                                        function get_alternatif(){
                                                            global $koneksi;
                                                                $alternatifkriteria = array();

                                                                $queryalternatif = "SELECT * FROM kos ORDER BY id_kos";
                                                                $result = $koneksi->query($queryalternatif);
                                                                $i=0;
                                                                while ($dataalternatif = $result->fetch_array())
                                                                {
                        
                                                                    $querykriteria = "SELECT * FROM kriteria ORDER BY id_kriteria";
                                                                    $query = $koneksi->query($querykriteria);
                                                                    $j=0;
                                                                    while ($datakriteria = $query->fetch_array())
                                                                    {
                                                                        $queryalternatifkriteria = "SELECT * FROM analisa WHERE id_kos = '$dataalternatif[id_kos]' AND id_kriteria = '$datakriteria[id_kriteria]'";
                                                                        $hasil = $koneksi->query($queryalternatifkriteria);
                                                                        $dataalternatifkriteria = $hasil->fetch_array();
                                                                        $alternatifkriteria[$i][$j] = $dataalternatifkriteria['nilai'];
                                                                        $j++;
                                                                    }
                                                                    $i++;
                                                                }

                                                            return $alternatifkriteria;
                                                        }
                        
                                                        function pembagi(){
                                                            global $conn;
                                                                $pembagi = array();
                                                                for ($i=0;$i<count($kriteria);$i++)
                                                                {
                                                                    $pembagi[$i] = 0;
                                                                    for ($j=0;$j<count($alternatif);$j++)
                                                                    {
                                                                        $pembagi[$i] = $pembagi[$i] + ($alternatifkriteria[$j][$i] * $alternatifkriteria[$j][$i]);
                                                                    }
                                                                    $pembagi[$i] = sqrt($pembagi[$i]);
                                                                }
                                                            return $pembagi;
                                                        }
                        
                                                        function get_kepentingan(){
                                                            global $koneksi;
                                                                $kepentingan = "SELECT * FROM kriteria";
                                                                $query = $koneksi->query($kepentingan);
                                                                $i=0;
                                                                while ($datakepentingan = $query->fetch_array())
                                                                {
                                                                    $kep[$i] = $datakepentingan['bobot_nilai'];
                                                                    $i++;
                                                                }
                                                            return $kep;
                                                        }
                                                        function get_costbenefit(){
                                                            global $koneksi;
                                                                $costbenefit = "SELECT * FROM kriteria";
                                                                $query = $koneksi->query($costbenefit);
                                                                $i=0;
                                                                while ($datacostbenefit = $query->fetch_array())
                                                                {
                                                                    $cb[$i] = $datacostbenefit['atribut'];
                                                                    $i++;
                                                                }
                                                            return $cb;
                                                        }

                                                function cmp($a, $b){
                                                            if ($a == $b) {
                                                                return 0;
                                                            }
                                                            return ($a > $b) ? -1 : 1;
                                                        }

                                                        function print_ar(array $x){    //just for print array
                                                            echo "<pre>";
                                                            print_r($x);
                                                            echo "</pre></br>";
                                                        }



                                                $k = jml_kriteria();

                                                $kri = get_kriteria();

                                                $a = jml_alternatif();

                                                $alt = get_alternatif();

                                                $alt_name = get_alt_name();

                                                $kep = get_kepentingan();

                                                $cb = get_costbenefit();
                                                ?>
                                                <div class="container" >
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="mt-4">PROSES PERHITUNGAN TOPSIS</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">    
                    <br><br><hr>
                                <h4 class="page-head-line">Hasil Analisa</h4>
                                <hr>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>Alternatif / Kriteria</th>
                                        <?php
                                        for($i=1;$i<=$k;$i++){
                                            echo "<th>".ucwords($kri[$i])."</th>"; 
                                        }
                                        ?>
                                        </tr>
                                    </thead>
                                    
                                    <tr>
                                        <?php
                                        for($i=0;$i<$a;$i++){

                                            echo "<tr><td><b>".ucwords($alt_name[$i])."</b></td>";

                                            for($j=0;$j<$k;$j++){
                                                echo "<td>".$alt[$i][$j]."</td>";
                                            }

                                            echo "</tr>";
                                        }
                                        ?>
                                    </tr>
                                </table>
                                </div>

                                <br><br><hr>
                                    <h4 class="page-head-line">Pembagi</h4>
                                <hr>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>#</th>
                                        <?php
                                        for($i=1;$i<=$k;$i++){
                                            echo "<th>".ucwords($kri[$i])."</th>";   
                                        }
                                        ?>
                                        </tr>
                                    </thead>
                                    
                                    <tr><td><b>Pembagi</b></td>

                                    <?php
                                    
                                        for($i=0;$i<$k;$i++){
                                            $pembagi[$i] = 0;
                                            for($j=0;$j<$a;$j++){
                                                $pembagi[$i] = $pembagi[$i] + pow($alt[$j][$i],2);
                                            }
                                            $pembagi[$i] = round(sqrt($pembagi[$i]),4);
                                            echo "<td>".$pembagi[$i]."</td>";
                                        }
                                                                        
                                    ?>

                                    </tr>
                                </table>
                            </div>

                            <br><br><hr>
                                <h4 class="page-head-line">Matriks Ternormalisasi</h4>
                            <hr>
                                    <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>Alternatif / Kriteria</th>
                                        <?php
                                        for($i=1;$i<=$k;$i++){
                                            echo "<th>".ucwords($kri[$i])."</th>";    
                                        }
                                        ?>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <?php
                                        for($i=0;$i<$a;$i++){
                                            echo "<tr><td><b>".ucwords($alt_name[$i])."</b></td>";
                                            for($j=0;$j<$k;$j++){
                                                $nor[$i][$j] = round(($alt[$i][$j] / $pembagi[$j]),4);
                                                echo "<td>".$nor[$i][$j]."</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tr>
                                    

                                </table>
                            </div>
    
                            <br><br><hr>
                                <h4 class="page-head-line">Matriks Ternormalisasi Terbobot</h4>
                                <hr>
                                    <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>Alternatif / Kriteria</th>
                                        <?php
                                        for($i=1;$i<=$k;$i++){
                                            echo "<th>".ucwords($kri[$i])."</th>";  
                                        }
                                        ?>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <?php
                                        for($i=0;$i<$a;$i++){
                                            echo "<tr><td><b>".ucwords($alt_name[$i])."</b></td>";
                                            for($j=0;$j<$k;$j++){
                                                $bob[$i][$j] = round(($nor[$i][$j] * $kep[$j]),4);
                                                echo "<td>".$bob[$i][$j]."</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tr>
                                </table>
                            </div>
                              </div>

                              
                              <br><br><hr>
                                <h4 class="page-head-line">Min Max Berdasarkan Cost Benefit Kriteria</h4>
                                <hr>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>#</th>
                                        <?php
                                        for($i=1;$i<=$k;$i++){
                                            echo "<th>".ucwords($kri[$i])."</th>";
                                        }
                                        ?>
                                        </tr>
                                    </thead>
                                    <tr><td><b>A+</b></td>
                                    <?php
                                        for($i=0;$i<$k;$i++){
                                            for($j=0;$j<$a;$j++){
                                                $temp[$j] = $bob[$j][$i];
                                            }
                                            if($cb[$i]=='benefit')
                                                $aplus[$i] = max($temp);
                                            if($cb[$i]=='cost')
                                                $aplus[$i] = min($temp);
                                            echo "<td>".$aplus[$i]."</td>";
                                        }                               
                                    ?>
                                    </tr>
                                    <tr><td><b>A-</b></td>
                                    <?php
                                        for($i=0;$i<$k;$i++){
                                            for($j=0;$j<$a;$j++){
                                                $temp[$j] = $bob[$j][$i];
                                            }
                                            if($cb[$i]=='benefit')
                                                $amin[$i] = min($temp);
                                            if($cb[$i]=='cost')
                                                $amin[$i] = max($temp);
                                            echo "<td>".$amin[$i]."</td>";
                                        }                               
                                    ?>
                                    </tr>
                                </table>


                                <table class="table table-striped table-bordered table-hover">
                                    <thead><tr><th>#</th><th>D+</th><th>D-</th></tr></thead>
                                    <?php
                                        for($i=0;$i<$a;$i++){
                                            echo "<tr><td><b>".ucwords($alt_name[$i])."</b></td>";
                                            $dplus[$i] = 0;
                                            for($j=0;$j<$k;$j++){
                                                $dplus[$i] = $dplus[$i] + pow(($aplus[$j] - $bob[$i][$j]),2);
                                            }
                                            $dplus[$i] = round(sqrt($dplus[$i]),4);
                                            echo "<td>".$dplus[$i]."</td>";
                                            $dmin[$i] = 0;
                                            for($j=0;$j<$k;$j++){
                                                $dmin[$i] = $dmin[$i] + pow(($amin[$j] - $bob[$i][$j]),2);
                                            }
                                            $dmin[$i] = round(sqrt($dmin[$i]),4);
                                            echo "<td>".$dmin[$i]."</td>";echo "</tr>";
                                        }                         
                                    ?>
                                    </tr>
                                </table>
                            </div>

                            </div>
                              
                              <br><br><hr>
                                <h4 class="page-head-line">Preferensi</h4>
                                <hr>
                                <?php
                                    echo "<table class='table table-striped table-bordered table-hover'>";
                                    echo "<thead><tr><th></th><th>V</th></tr></thead>";
                                    for($i=0;$i<$a;$i++){
                                        echo "<tr><td><b>".ucwords($alt_name[$i])."</b></td>";
                                        $v[$i][0] = round(($dmin[$i] / ($dplus[$i]+$dmin[$i])),4);
                                        $v[$i][1] = $alt_name[$i];
                                        echo "<td>".$v[$i][0]."</td>";
                                    }
                                    echo "</table>";
                                    usort($v, "cmp");
                                    for ($i=0; $i<$a; $i++){
                                        $key = key($v);
                                        $value = current($v);
                                        $hsl[$i] = array($value[1],$value[0]); 
                                        next($v);
                                    }
                                    ?>

                                    <br><br><hr>
                                    <h4 class="page-head-line">Hasil Akhir Analisa</h4>
                                    <hr>
                                    <?php
                                    echo "Tabel berikut ini adalah hasil analisa yang diurutkan berdasarkan hasil nilai tertinggi. 
                                    </br>Sehingga alternatif terbaik adalah <b>".ucwords(($hsl[0][0]))."</b> dengan nilai <b>".$hsl[0][1]."</b>.";
                                    ?>
                                    <br><br>
                                    <?php
                                    echo "<table class='table table-striped table-bordered table-hover'>";
                                    echo "<thead><tr><th>No.</th><th>Alternatif</th><th>Hasil Akhir</th></tr></thead>";
                                    echo "<tbody>";
                                    for($i=0;$i<$a;$i++){
                                        echo "<tr><td>".($i+1).".</td><td>".ucwords(($hsl[$i][0]))."</td><td>".$hsl[$i][1]."</td></tr>";
                                    }
                                    echo "</tbody></table>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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