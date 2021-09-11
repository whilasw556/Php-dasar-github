<?php
echo "Program lampu lalu lintas <br>";
$lampu = "hijau";
switch ($lampu){
    case "merah":
    echo "anda harus berhenti";
    break;
    case "kuning":
    echo "anda harus siap - siap";
    break;
    case "hijau":
    echo "anda harus maju";
    break;
    default:
    echo "lampu lalu lintas error";
}
?>