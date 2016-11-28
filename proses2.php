<html>
<head>
<title>Handphone Shop</title>
</head>
<body>
<?php
$produk="produk";
$ID=$_POST["ID"];
$nama=$_POST["nama"];
$email=$_POST["email"];
$alamat=$_POST["alamat"];
$member=$_POST["member"];
$pembayaran=$_POST["pembayaran"];
?>
<h1>Data Customer</h1>
<hr>
<pre>
Produk		: <?php echo $produk; if (isset($_POST['produk1']))
			echo $_POST['produk1']." , ";
		if (isset($_POST['produk2']))
			echo $_POST['produk2']." , ";
		if (isset($_POST['produk3']))
			echo $_POST['produk3']." , ";
		if (isset($_POST['produk4']))
			echo $_POST['produk4']." , ";
		if (isset($_POST['produk5']))
			echo $_POST['produk5'] ?><br>
Nomor ID	: <?php if ((trim($ID)== '') || ($ID<0) || (!preg_match ("/^[0-9]/",$ID)))
	echo "Input ID Anda salah !"; else echo $ID?><br>
Nama		: <?php if(strlen($nama)==0)
	echo "Silahkan masukkan nama Anda !"; else echo $nama?><br>
Email		: <?php if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
	echo "Invalid email !"; 
} else echo $email?><br>
Alamat		: <?php  if(strlen($alamat)==0)
	echo "Silahkan masukkan alamat Anda !"; else echo $alamat ?><br>
Member		: <?php echo $member?><br>
Pembayaran  	: <?php echo $pembayaran?><br>
<br>
</pre>
</body>
</html>
