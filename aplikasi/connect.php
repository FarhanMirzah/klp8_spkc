<?php
	    $koneksi=mysqli_connect("localhost", "root", "","kos");

        if(!$koneksi)
        { 
            die ("Koneksi dengan database gagal: ".mysql_connect_error());
        }
?>