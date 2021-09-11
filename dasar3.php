<?php
$belanja = -1000;
if ($belanja >= 15000){
    echo "Maka anda mendapatkan Silverqueen";
} elseif ($belanja <= 10000 && $belanja >= 5000){
    echo "Maka anda mendapatkan Teh pucuk 2 botol";
} elseif($belanja <= 5000 && $belanja >= 0){
    echo "Maka anda mendapatkan cireng";
} else{
    echo "Yg bener tolol";
}

?>