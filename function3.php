<?php
function hitungumur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalaamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Saya berusia ". hitungumur(2004, 2021) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Whildan nur salim");
?>