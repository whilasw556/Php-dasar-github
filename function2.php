<?php
function perkenalan($nama, $salam="Assalaamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Muhardian", "Hi");
echo "<hr>";

$saya = "indy";
$ucapansalam = "Selamat pagi";

perkenalan($saya);
?>