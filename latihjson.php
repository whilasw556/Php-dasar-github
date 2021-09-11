<?php
$dosen = '{
"nama1": "Danny  Indra Gunawan",
"nama2": "Muhammad Sabar",
"nama3": "Tarsinah Sumarni",
"nama4": "Saepudin"
}';
$murid1 = '{
"huda": ["Nim : 3242", "Nama : huda", "Umur : 17", "Email : huda@gmail.com"],
"joko": ["Nim : 1342", "Nama : joko", "Umur : 17", "Email : joko@gmail.com"],
"dedi": ["Nim : 3652", "Nama : dedi", "Umur : 17", "Email : dedi@gmail.com"],
"baka": ["Nim : 7642", "Nama : baka", "Umur : 17", "Email : baka@gmail.com"],
"rudi": ["Nim : 1242", "Nama : rudi", "Umur : 17", "Email : rudi@gmail.com"]
}';
$json = json_decode($dosen);
echo "<br>1. {$json -> nama1}<br>";
$data = json_decode($murid1);
echo "<br>1. ". implode("<br>", $data -> huda);
echo "<br>2. ". implode("<br>", $data -> joko);
echo "<br>3. ". implode("<br>", $data -> dedi);
echo "<br>4. ". implode("<br>", $data -> baka);
echo "<br>5. ". implode("<br>", $data -> rudi);
echo "<br>";

$murid2 = '{
    "brod": ["Nim : 2352", "Nama : brod", "Umur : 17", "Email : brod@gmail.com"],
    "acok": ["Nim : 2672", "Nama : acok", "Umur : 17", "Email : acok@gmail.com"],
    "brek": ["Nim : 3235", "Nama : brek", "Umur : 17", "Email : brek@gmail.com"],
    "suku": ["Nim : 7123", "Nama : suku", "Umur : 17", "Email : suku@gmail.com"],
    "jade": ["Nim : 1234", "Nama : jade", "Umur : 17", "Email : jade@gmail.com"]
    }';
    $json = json_decode($dosen);
    echo "<br>2. {$json -> nama2}<br>";
    $data = json_decode($murid2);
    echo "<br>1. ". implode("<br>", $data -> brod);
    echo "<br>2. ". implode("<br>", $data -> acok);
    echo "<br>3. ". implode("<br>", $data -> brek);
    echo "<br>4. ". implode("<br>", $data -> suku);
    echo "<br>5. ". implode("<br>", $data -> jade);
    echo "<br>";

    $murid3 = '{
        "rudi": ["Nim : 2352", "Nama : rudi", "Umur : 17", "Email : rudi@gmail.com"],
        "sumi": ["Nim : 2672", "Nama : sumi", "Umur : 17", "Email : sumi@gmail.com"],
        "indra": ["Nim : 3235", "Nama : indra", "Umur : 17", "Email : indra@gmail.com"],
        "acep": ["Nim : 7123", "Nama : acep", "Umur : 17", "Email : acep@gmail.com"],
        "asep": ["Nim : 1234", "Nama : asep", "Umur : 17", "Email : ase[@gmail.com"]
        }';
        $json = json_decode($dosen);
        echo "<br>3. {$json -> nama3}<br>";
        $data = json_decode($murid3);
        echo "<br>1. ". implode("<br>", $data -> rudi);
        echo "<br>2. ". implode("<br>", $data -> sumi);
        echo "<br>3. ". implode("<br>", $data -> indra);
        echo "<br>4. ". implode("<br>", $data -> acep);
        echo "<br>5. ". implode("<br>", $data -> asep);
        echo "<br>";
    
        $murid4 = '{
            "gobang": ["Nim : 3242", "Nama : gobang", "Umur : 17", "Email : gobang@gmail.com"],
            "komeng": ["Nim : 1342", "Nama : komeng", "Umur : 17", "Email : komeng@gmail.com"],
            "kiki": ["Nim : 3652", "Nama : kiki", "Umur : 17", "Email : kiki@gmail.com"],
            "resta": ["Nim : 7642", "Nama : resta", "Umur : 17", "Email : resta@gmail.com"],
            "winaf": ["Nim : 1242", "Nama : winaf", "Umur : 17", "Email : winaf@gmail.com"]
            }';
            $json = json_decode($dosen);
            echo "<br>4. {$json -> nama4}<br>";
            $data = json_decode($murid4);
            echo "<br>1. ". implode("<br>", $data -> gobang);
            echo "<br>2. ". implode("<br>", $data -> komeng);
            echo "<br>3. ". implode("<br>", $data -> kiki);
            echo "<br>4. ". implode("<br>", $data -> resta);
            echo "<br>5. ". implode("<br>", $data -> winaf);