<?php
include"koneksi.php";
$sql=mysqli_query($koneksi,"select a_nama1 from tabel_1");
$data=mysqli_fetch_array($sql);
$namapanggilan=$data['a_nama1'];
echo " Nama di Database(original)=" .ucwords(substr($namapanggilan,0,-1)). "<br>";
echo " Nama dalam Huruf Besar =".ucwords(substr($namapanggilan,1))."<br>";
echo " Nama dalam Huruf Kecil=".ucwords(substr($namapanggilan,0,-1))."";
echo " ".substr($namapanggilan,0,-1)."";
?>
