<!DOCTYPE html>
<html>
<head>
<title>Konser</title>
</head>
<body>
<h2 align="center">KONSER AMAL ASSALAAM</h2>
<form method = "POST" action= "latihanstudio2.php">
<table align="center" border="1" style="background-color : black;">
<tr>
<td align="center" style="background-color : aqua;">Nama</td>
<td><input type='text' name='nama'></td>
</tr>
<tr>
<td align="center" style="background-color : aqua;">Kode studio</td>
<td align="center" style="background-color : white;"><select name='kode' value='kode'>
<option name='studio1' value="studio1">STUDIO 1</option>
<option name='studio2' value="studio2">STUDIO 2</option>
</select>
</td>
</tr>
<tr>
<td align="center" style="background-color : aqua;">Jenis Kelas</td>
<td align="center" style="background-color : white;">
<input type='radio' name="jeniskelas" value="jenis">VIP </input>
<input type='radio' name="jeniskelas" value="jenis2">FESTIVAL </input>
</td>
</tr>
<tr>
<td align="center" style="background-color : aqua;">Tiket</td>
<td align="center" style="background-color : white;">
<input align="center" style="background-color : white;" name="jumlahtiket"></input>
</td>
</tr>
</table>
<table align="center" border="1" style="background-color : black;">
<td><input type="submit" name ="simpan" value='KIRIM'></td>
</tr>
</table>
</form>

</body>
</html>

