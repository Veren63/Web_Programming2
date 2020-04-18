<?php
include "koneksi.php";
$qry=mysqli_query($koneksi,"select a_nama2 from table_1");
$data=mysqli_fetch_array($qry);
$namalengkap=$data['a_nama2'];
$explode=explode(" ",$namalengkap);
$nama_awal=$explode[0];
$nama_akhir=$explode[0];
$shuffled=str_shuffle($nama_awal);
$random=rand(2,99);
$nama_inisial=$shuffled.$random;
echo "Nama lengkap :".$namalengkap. "<br>";
echo "Nama awal :".$nama_awal. "<br>";
echo "Nama akhir :".$nama_akhir. "<br>";
echo "Nama inisial :".$nama_inisial. "<br>";
?>