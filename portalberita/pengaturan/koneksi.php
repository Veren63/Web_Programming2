<?php
$username="root";
$password="";
$server="localhost";
$database="materi_portalberita";
$koneksi=mysqli_connect("$server","$username","$password","$database");
if(!$koneksi)
{
die("Gagal, Database tidak ditemukan".mysqli_connect_error());
}
?>