<html>
<head>
<title>Proses Input</title>
</head>
<body>
<?php
$operankiri=$_POST["operankiri"];
$operankanan=$_POST["operankanan"];
$operator=$_POST["operator"];
$tambah=$operankiri+$operankanan;
$kurang=$operankiri-$operankanan;
$kali=$operankiri*$operankanan;
$bagi=$operankiri/$operankanan;
$modulus=$operankiri%$operankanan;
?>
Operan Kiri  : <?php echo $operankiri ?>
<br>
Operan Kanan : <?php echo $operankanan ?>
<br>
<?php
if ($operator == "+"){
echo "Operator : $operator <br> $operankiri $operator $operankanan = ".$tambah;
}
elseif($operator == "-"){
echo "Operator : $operator <br> $operankiri $operator $operankanan = ".$kurang;
}
elseif($operator == "*"){
echo "Operator : $operator <br> $operankiri $operator $operankanan = ".$kali;
}
elseif($operator == "/"){
echo "Operator : $operator <br> $operankiri $operator $operankanan = ".$bagi;
}
else{
echo "Operator : $operator <br> $operankiri $operator $operankanan = ".$modulus;
}
?>
</body>
</html>
