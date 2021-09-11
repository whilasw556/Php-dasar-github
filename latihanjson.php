<?php

$json = '{
    "nama": "Nurul Huda",
    "nim": "192947",
    "umur": "23",
    "email": "huda@gmail.com",
    "nama2": "opan",
    "nim2": "192234",
    "umur2": "22",
    "email2": "opan@gmail.com",
    "nama3": "bekur",
    "nim3": "192341",
    "umur3": "24",
    "email3": "bekur@gmail.com",
    "nama4": "samsul",
    "nim4": "192942",
    "umur4": "22",
    "email4": "sull@gmail.com",
    "nama5": "koko",
    "nim5": "1935647",
    "umur5": "19",
    "email5": "koo@gmail.com"

}';?>
<?php
$mahasiswa = json_decode($json);?>
<li>Danny Indra Gunawan, Dan Para Mahasiswa Bimbingannya</li>
<?php
echo "<br>";
echo "nama: {$mahasiswa -> nama} <br>";
echo "nim: {$mahasiswa -> nim} <br>";
echo "umur: {$mahasiswa -> umur} <br>";
echo "email: {$mahasiswa -> email} <br>";
echo "<br>";
echo "nama: {$mahasiswa -> nama2} <br>";
echo "nim: {$mahasiswa -> nim2} <br>";
echo "umur: {$mahasiswa -> umur2} <br>";
echo "email: {$mahasiswa -> email2} <br>";
echo "<br>";
echo "nama: {$mahasiswa -> nama3} <br>";
echo "nim: {$mahasiswa -> nim3} <br>";
echo "umur: {$mahasiswa -> umur3} <br>";
echo "email: {$mahasiswa -> email3} <br>";
echo "<br>";
echo "nama: {$mahasiswa -> nama4} <br>";
echo "nim: {$mahasiswa -> nim4} <br>";
echo "umur: {$mahasiswa -> umur4} <br>";
echo "email: {$mahasiswa -> email4} <br>";
echo "<br>";
echo "nama: {$mahasiswa -> nama5} <br>";
echo "nim: {$mahasiswa -> nim5} <br>";
echo "umur: {$mahasiswa -> umur5} <br>";
echo "email: {$mahasiswa -> email5} <br>";
?>