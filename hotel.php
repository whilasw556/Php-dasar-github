<!DOCTYPE html>
<html>
<head>
<title>HOTEL</title>
</head>
<body><table align="center" border="1" style="background-color : black;">
<tr>
<td align="center" border="5" style="background-color : green;">PENDATAAN HOTEL</td>
</tr>
</table>
<form method = "POST" action= "hotel2.php">
<table align="center" border="1" style="background-color : black;">
<tr>
<td align="center" style="background-color : aqua;">Nama</td>
<td>----></td>
<td><input type='text' name='nama'></td>
</tr>
<tr>
<td align="center" style="background-color : aqua;">Tanggal Menginap</td>
<td>----></td>
<td><input type='text' name='tanggal'></td>
</tr>
<tr>
<td align="center" style="background-color : aqua;">No Identitas</td>
<td>----></td>
<td><input type='text' name='identitas'></td>
</tr>
<tr>
<td align="center" style="background-color : aqua;">Tipe Kamar</td>
<td>----></td>
<td><select name='tipe' value='tipe'>
<option>superior</option>
<option>deluxe</option>
<option>junior</option>
</select>
</tr>
<tr>
<td align="center" style="background-color : aqua;">Berapa Hari</td>
<td>----></td>
<td><input type='date' name='waktu'></td>
</td>
</tr>
</table>
<table align="center">
<td><input type="submit" name ="simpan" value='KIRIM'></td>
</table>
</tr>
</form>

</body>
</html>