<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method = "POST" action= "latihanstudio.php">
<table>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $_POST["nama"]; ?>
</td>
</tr>
<tr>
    <td>Kode Studio</td>
    <td>:</td>
    <td><?php echo $_POST["kode"];?>
</td>
</tr>
<tr>
    <td>Bintang Tamu</td>
    <td>:</td>
    <td><?php $kode = $_POST['kode'];
    if ($kode == "studio1"){
        echo "Opik";
    } else {
        echo "raihan";
        
    } ?>
</td>
</tr>

<tr>
    <td>Jenis Kelas</td>
    <td>:</td>
    <td><?php $jeniskelas = $_POST['jeniskelas'];
    if ($jeniskelas == "jenis"){
        echo "VIP";
    } else {
        echo "FESTIVAL";
        
    } ?>
</td>
</tr>

<tr>
<td>Harga</td>
<td>:</td>
<td><?php
$jumlahtiket = $_POST['jumlahtiket'];
if($jeniskelas == "jenis"){
    echo "50000";
    $harga = 50000;
}else {
    echo "25000";
    $harga = 25000;
}

$total = $harga * $jumlahtiket;
?></td>
<h3><a href=latihanstudio.php>kembali
</tr>
</table>
</form>
</body>
</html>