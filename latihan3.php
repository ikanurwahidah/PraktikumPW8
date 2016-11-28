<html>
<head>
<title>Kalkulator</title>
</head>
<body>
<h1>Demo Operator</h1>
<h2>Arithmetic</h2>
<table border="1">
<form action="operator.php" method="post">
	<tr>
		<td>Operand Kiri</td>
		<td>Operator</td>
		<td>Operand Kanan</td>
		<td></td>
	</tr>
	<tr>
		<td><input type="text" name=operankiri></td>
		<td>
		<select name="operator">
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
			<option>%</option>
		</select>
		</td>
		<td><input type="text" name=operankanan></td>
		<td><input type="submit" value="Submit"></td>
	</tr>
</form>
</table>
</body>
<html>
