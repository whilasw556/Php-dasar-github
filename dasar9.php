<?php
$negara = array(
    array('jawa barat', 'bandung', 'depok', 'bogor'),
    array('jawa timur', 'madiun', 'surabaya', 'malang'),
    array('jawa tengah', 'semarang', 'tegal', 'solo')
);
?>

<ul>
    <?php foreach ($negara as $key => $value):?>
    <li>Kota - kota di <?= $value[0] ?> adalah <?= $value[1].
    ', ' .$value[2]. ', '.$value[3]?></li>
    <?php endforeach ?>
    </ul>