<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select a_nama1 from table_1");
$data=mysqli_fetch_array($sql);
$namapanggilan=$data['a_nama1'];
echo "Nama di database(original) = ".$namapanggilan."<br>";
echo "Output Pertama = ".ucwords(substr($namapanggilan,0,-1))."<br>";
echo "Output Kedua = ".ucwords(substr($namapanggilan,1))."<br>";
echo "Output Ketiga = ".ucwords(substr($namapanggilan,0,-1)).substr($namapanggilan,0,-1)."";
?>