<?php
$array = ['Jurusan Teknik Informatika', 'Jurusan Sistem Informatika',
'Jurusan Teknik Komputer', 'Jurusan Manajemen Informatika'];
$array_length = count($array);

for ($i=0; $i<=4; $i++) {
  echo $array . ' - Ada di Index ' . $i;
  echo '<br>';
}
?>

<?php
$employee = [
    'Kata kunci index' => 'Jurusan 1',
    'Kata kunci index' => 'Jurusan 2',
    'Kata kunci index' => 'Jurusan 3',
    'Kata kunci index' => 'Jurusan 4',
];
foreach ($employee as $key => $value){
    echo $key . ' = ' . $value;
    echo '<br>';
}
?>