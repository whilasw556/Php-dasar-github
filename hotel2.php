<!DOCTYPE html>
<html>
<body>
<tr>
<?php
$nama=@$_POST['nama'];
$tgl=@$_POST['tanggal'];
$identitas=@$_POST['identitas'];
$tipe=@$_POST['tipe'];
$waktu=@$_POST['waktu'];


echo "<td>Nama     : $nama</td><br>";
echo "<td>Tanggal menginap  : $tgl</td><br>";
echo "<td>No identitas : $identitas</td><br>";
echo "<td>Tipe kamar : $tipe</td><br>";
echo "<td>Berapa hari : $waktu</td><br>";

if($tipe == "superior"){
    $superior = 850000;
    echo "harga : $superior<br>";
    $hasil = $superior * $waktu;
    echo "biaya : $hasil<br>";
    if($hasil >= 170000 && $hasil <= 2500000){
        $diskon = 15/100 * $hasil;
        $bayar = $hasil - $diskon;
        echo "Anda mendapat diskon 15%<br>";
        echo "Diskon : $diskon<br>";
        echo "Total bayar : $bayar";
    } elseif ($hasil >= 2500000) {
        $diskon = 25/100 * $hasil;
        $bayar = $hasil - $diskon;
        echo "Anda mendapat diskon 15%<br>";
        echo "Diskon : $diskon<br>";
        echo "Total bayar : $bayar";
    } else {
        echo "Anda Tidak Mendapatkan Diskon<br>";
        echo "Diskon : 0<br>";
        echo "Total Bayar : $hasil<br>";
    }
}
else if ($tipe == "deluxe"){
    $deluxe = 890000;
    echo "Harga : $deluxe<br>";
    $hasil = $deluxe * $waktu;
    echo "Biaya : $hasil<br>";
    if ($hasil >= 1700000 && $hasil <=2500000){
        $diskon = 15/100 * $hasil;
        $bayar = $hasil - $diskon;
        echo "Anda Mendapatkan Diskon<br>";
        echo "Diskon : $diskon<br>";
        echo "Total Bayar :$bayar<br>";
    }elseif ($hasil >= 2500000){
        $diskon = 25/100 * $hasil;
        $bayar = $hasil - $diskon;
        echo "Anda Mendapatkan Diskon<br>";
        echo "Diskon : $diskon<br>";
        echo "Total Bayar :$bayar<br>";
    } else {
        echo "Anda Tidak Mendapatkan Diskon<br>";
        echo "Diskon : 0<br>";
        echo "Total Bayar : $hasil<br>";
    }
}
else if ($tipe == "junior"){
    $junior = 1400000;
    echo "Harga : $junior<br>";
    $hasil = $junior * $waktu;
    echo "Biaya : $hasil<br>";
    if ($hasil >= 1700000 && $hasil <=2500000){
        $diskon = 15/100 * $hasil;
        $bayar = $hasil - $diskon;
        echo "Anda Mendapatkan Diskon<br>";
        echo "Diskon : $diskon<br>";
        echo "Total Bayar :$bayar<br>";
    }elseif ($hasil >= 2500000){
        $diskon = 25/100 * $hasil;
        $bayar = $hasil - $diskon;
        echo "Anda Mendapatkan Diskon<br>";
        echo "Diskon : $diskon<br>";
        echo "Total Bayar :$bayar<br>";
    } else {
        echo "Anda Tidak Mendapatkan Diskon<br>";
        echo "Diskon : 0<br>";
        echo "Total Bayar : $hasil<br>";
    }
}
?>
</tr>
<h3><a href=hotel.php>kembali
</table>
</body>
</html>