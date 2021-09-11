<!DOCTYPE html>
<html>
<head>
<title>HOTEL</title>
</head>
<body><h2 align="center">MENAMPILKAN DATASISWA</h2>
<form method = "POST" action= "datasiswaa.php">
<table align="center">
<td><input align="center" type="submit" name ="tambahsiswa" value='Tambah Siswa'></td>
</table>
<br></br>
</form>
<?php
if(isset($_POST ['submit'])){
$nama = $_POST['nama'];
$tanggal = $_POST['kelamin'];
$identitas = $_POST['kelas'];
$tipe = $_POST['alamat'];
?>
<table border="1" align="center">
<tr>
<td>No</td>
<td>Nama</td>
<td>Jenis Kelamin</td>
<td>Kelas</td>
<td>Alamat</td>
</tr>
<tr>
<td>1</td>
<td><?php echo $_POST['nama']; ?></td>
<td><?php echo $_POST['kelamin']; ?></td>
<td><?php echo $_POST['kelas']; ?></td>
<td><?php echo $_POST['alamat']; }?></td>


</tr>
</table>

</body>
</html>