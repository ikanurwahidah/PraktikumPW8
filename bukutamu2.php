<?php include_once 'header.php'; ?>
<html>
<head>
<title>Buku Tamu</title>
</head>
<body>
<center>Buku Tamu </center>
<form align="center" action="simpan.php" method="POST">
Id			: <input type="text" name=id" size="35" maxlength="50"><br>
Nama		: <input type="text" name="nama" size="35" maxlength="50"><br>
Email		: <input type="text" name="email" size="35" maxlength="50"><br>
Komentar	: <textarea name="komentar" rows="5" cols="30"></textarea><br>
<input type="submit" value="Simpan">
<input type="reset" value="Reset">
</form>
<center>Selamat Datang</center>
</body>
</html>
<?php include_once 'footer.php'; ?>
