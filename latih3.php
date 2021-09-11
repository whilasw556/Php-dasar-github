<?php
$bulan = "MEI";
$bayar = 1000000;
$mei = 30;
$juni = 20;
$juli = 10;
$potong1 = $bayar - ($bayar *($mei/100));
$potong2 = $bayar - ($bayar *($juni/100));
$potong3 = $bayar - ($bayar *($juli/100));

if($bulan == "MEI"){
    echo "Daftar pada bulan $bulan <br> ";
    echo "Anda mendapat diskon 30%<br>";
    echo "Biaya yang harus di bayar = $potong1";
}elseif($bulan == "JUNI"){
    echo "Daftar pada bulan $bulan <br> ";
    echo "Anda mendapat diskon 20%<br>";
    echo "Biaya yang harus di bayar = $potong2<br>";
}elseif($bulan == "JULI"){
    echo "Daftar pada bulan $bulan <br> ";
    echo "Anda mendapat diskon 10%<br>";
    echo "Biaya yang harus di bayar = $potong3<br>";
}else{
    echo "Data tidak ditemukan";
}