<?php
echo "1.Output array dengan menggunakan perintah PRINT_R()<br>";
$negara = [];
$negara[] = 'Indonesia';
$negara[] = 'Malaysia';
$negara[] = 'Singapura';
$negara[] = 'Brunei darussalam';
$negara[] = 'filipina';
echo '<pre>';
print_r($negara);
?>

<?php
echo "2.Output assosiatif <br>";
echo '<br>';
$employee = [
    'Indonesia' => 'Jakarta',
    'Malaysia' => 'Kuala lumpur',
    'Singapura' => 'Singapura',
    'Thailand' => 'Bangkok',
    'Filipina' => 'Manila',
];
foreach ($employee as $key => $value){
    echo '- Ibukota ' . $key . ' Adalah ' . $value;
    echo '<br>';
    echo '<br>';
}
?>