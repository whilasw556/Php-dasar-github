<?php

$listmahasiswajson = '[
    { "nama": "Nurul Huda" },
    { "nama": "Renza Ilhami Riski" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahmad Dwi Oktanto" }
]';

$listmahasiswa = json_decode($listmahasiswajson);

foreach ($listmahasiswa as $key => $mahasiswa){
    echo "{$key}. Nama: {$mahasiswa -> nama} <br>";
}