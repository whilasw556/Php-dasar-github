<?php
$perusahaan = [
    'nama' => 'whildan nur salim',
    'umur' => '17 tahun',
    'alamat' => 'cibedug hilir',
    'hobi' => ['main game' , 'sepak bola'],
    'medsos' => ['tt' => 'whiaja' , 'fb' => 'none']
];
echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Pemanggilan Array 2 Dimensi" . "<br>";
echo $perusahaan['hobi'][1]."<br>";
echo $perusahaan['medsos']['fb'];
?>