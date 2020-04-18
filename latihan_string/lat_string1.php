<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select a_nama1 from table_1");
$data=mysqli_fetch_array($sql);
$namapanggilan=$data['a_nama1'];
echo "Nama di database(original) =".$namapanggilan."<br>";
echo "Nama dalam Huruf Besar =".strtoupper($namapanggilan)."<br>";
echo "Nama dalam Huruf kecil =".strtolower($namapanggilan)."<br>";
echo "Huruf kecil di awal besar =".ucwords($namapanggilan)."<br>";

echo "<h2>Menggunakan array 2dimensi (menampilkan urutan array)</h2>";
$qry2=mysqli_query($koneksi,"select a_nama1 from table_1");
$data2=array();
while($data2[]= mysqli_fetch_array($qry2));

$namapanggilan2=$data2[3]['a_nama1'];
echo "Nama di database(original) =".$namapanggilan2."<br>";
echo "Nama dalam Huruf Besar =".strtoupper($namapanggilan2)."<br>";
echo "Nama dalam Huruf kecil =".strtolower($namapanggilan2)."<br>";
echo "Huruf kecil di awal besar =".ucwords($namapanggilan2)."<br>";


?>