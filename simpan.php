<html>
<head><title>Simpan Buku Tamu</title></head>
<body>
<h1>Simpan Bukutamu Mysql</h1>
<?php
$Id = $_POST["ID"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];
$conn = mysql_connect("localhost","root","") or die ("Koneksi Gagal");
mysql_select_db("147006172",$conn);
	echo "Id		: $Id <br>";
	echo "Nama		: $nama <br>";
	echo "Email		: $email <br>";
	echo "Komentar	: $komentar <br>";
$sqlstr = "insert into bukutamu (Id,nama,email,komentar) values ('$Id','$nama','$email','$komentar')";
$hasil = mysql_query($sqlstr,$conn);
echo "Simpan bukutamu berhasil dilakukan";
?>
</body>
</html>
