<?php
$kolom = $_POST['kolom'];
$cari = $_POST['cari'];
$conn = mysql_connect("localhost","root","") or die("Koneksi gagal!!");
mysql_select_db("147006172",$conn);
$hasil = mysql_query("select * from bukutamu where $kolom like '%$cari%'",$conn);
$jumlah = mysql_num_rows($hasil);
echo "<br>";
echo "Ditemukan : $jumlah";
echo "<br>";
while($baris = mysql_fetch_array($hasil)) {
	echo "Id		: ";
	echo $baris[0];
	echo "<br>";
	echo "Nama		: ";
	echo $baris[1];
	echo "<br>";
	echo "Email		: ";
	echo $baris[2];
	echo "<br>";
	echo "Komentar	: ";
	echo $baris[3];}
?>
