<?php
$nilai = 1000;
if ($nilai > 100){
    echo "Nilai tidak ada";
} elseif($nilai >= 90){
    echo "A";
} elseif($nilai >= 80){
    echo "B";
} elseif($nilai >= 75){
    echo "C";
} elseif($nilai >= 60){
    echo "D";
} elseif($nilai >= 0){
    echo "E";
} else{
    echo "Nilai Tidak Ada";
}

?>