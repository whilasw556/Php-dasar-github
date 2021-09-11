<?php
$benua = [
    'asia' => ['indonesia' => ['bandung' , 'jakarta' , 'lampung' , 'surabaya' , 'malang'] , 'jepang' => ['hirashima' , 'nagoya' , 'tayohashi' , 'okazaki' , 'seto'] , 'vietnam' => ['hanoi' , 'halong' , 'ninh' , 'mekong' , 'hochi']],
    'afrika' => ['algeria' => ['algiers' , 'oran' , 'batna' , 'setif' , 'jijel'] , 'libya' => ['tripoli' , 'benghaji' , 'hom' , 'brega' , 'jadid'] , 'mesir' => ['kairo' , 'aleksandria' , 'luxor' , 'giza' , 'bursaid']],
    'australia' => ['australia' => ['canberra' , 'sydney' , 'melboume' , 'darwin' , 'perth'] , 'selandiabaru' => ['wellington' , 'auckland' , 'dunedin' , 'napier' , 'rotorua'] , 'fiji' => ['suva' , 'savu' , 'labasa' , 'levuka' , 'nadi']],
    'eropa' => ['jerman' => ['berlin' , 'munchen' , 'hamburg' , 'koln' , 'potsdam'] , 'perancis' => ['paris' , 'piana' , 'ars' , 'bonneval' , 'anncecy'] , 'belanda' => ['amsterdam' , 'rotterdam' , 'almere' , 'ede' , 'venlo']]
];
echo "<pre>";
print_r($benua);
?>
<ul>
    <? echo "Menampilkan array 2d menggunakan Foreach";
    <?php foreach ($benua as $key => $value):?>
    <li>Kota - kota di <?= $value['asia'][0] ?> adalah <?= $value['asia'][1].
    ', ' .$value['asia'][2]?></li>
    <?php endforeach ?>
    </ul>
