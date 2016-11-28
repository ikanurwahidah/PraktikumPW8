<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("147006172",$conn);
$hasil = mysql_query("select * from bukutamu",$conn);
$jumlah = mysql_num_rows($hasil);
echo "<center>Daftar Pengunjung</center>";
echo "Jumlah Pengunjung : $jumlah";
$a=1;
while($baris = mysql_fetch_array($hasil)) {
	echo "<br>";
	echo $a;
	echo "<br>";
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
	echo $baris[3];
	$a++;
}?>
