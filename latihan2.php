<html>
<head>
<title>Handphone Shop</title>
</head>
<body>
<h1>HANDPHONE SHOP</h1>
Produk GSM Mobile (Best Price) :<br>
<form action ="proses2.php" method="post">
	<input type="checkbox" name="produk1" value="nokia 1208 Rp.200.000,-,-" >Samsung B3410 Rp. 1.624.000,- <br>
	<input type="checkbox" name="produk2" value="Xiomi Redmi 2 pro Rp.1.350.000,-">Xiomi Redmi 2 pro Rp.1.350.000,-<br>
	<input type="checkbox" name="produk3" value="Samsung granduos Rp.900.000,-">Oppo A37F Rp. 2.699.000,- <br>
	<input type="checkbox" name="produk4" value="Samsung A5 Rp.4.500.000,-">Samsung A5 Rp.4.500.000,-<br>
	<input type="checkbox" name="produk5" value="Advan Rp.1.100.000,-">Samsung granduos Rp.900.000,-<br>
================================= <br>
<pre>
Data Customer
<br>
ID Customer : <input type="text" name="ID" size="25" maxlength="50"><br>
Nama        : <input type="text" name="nama" size="25" maxlength="50"><br>
Email       : <input type="text" name="email" size="25" maxlength="50"><br>
Alamat      : <input type="text" name="alamat" size="25" maxlength="50"><br>
Member      : 
<input type=radio name="member" value=Ya checked>Member
<input type=radio name="member" value=Bukan>Bukan
Pembayaran  : <select name=pembayaran>
	<option value=VISA>VISA
	<option value=MasterCard>Master Card
	<option value=DebitBCA>Debit BCA
	</select><br>
</pre>
<input type="submit" value="Proses" name="submit">
</form>
</body>
</html>
