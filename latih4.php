<?php
$jurusan = "RPL";
echo "<center>Program memilih jurusan</center><br>";
switch ($jurusan){
    case "RPL":
    echo "<center>Anda memasuki jurusan RPL</center>";
    break;
    case "TBSM":
    echo "<center>Anda memasuki jurusan TBSM</center>";
    break;
    case "TKR":
    echo "<center>Anda memasuki jurusan TKRO</center>";
    break;
    default:
    echo "<center>Data ERROR";


}

?>