<?php
include "koneksi.php";
$qry2=mysqli_query($koneksi,"select a_nama2 from table_1");
$data2=array();
while($data2[]=mysqli_fetch_array($qry2));
$namalengkap=$data2[3]['a_nama2'];
$explode=explode(" ",$namalengkap);
$nama_awal=$explode[0];
$nama_akhir=$explode[0];
echo "Nama di database(original) = ".$namalengkap."<br>";
echo "Output Pertama = ".ucwords(substr($namalengkap,0,-9)).".".strtoupper(substr($namalengkap,15,-3))."<br>";
echo "Output Kedua = ".ucwords(substr($namalengkap,15)).", ".ucwords(substr($namalengkap,0,-4))."<br>";
?>