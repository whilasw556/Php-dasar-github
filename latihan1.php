<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Masukan Bintang <input type="text" name="bintang"> <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $bin = $_POST ['bintang'];

    for($a = 1; $a <= $bin; $a++){
        for($b = 1; $b <= $a; $b++){
            echo "*";
        }
        echo "<br>";
    }
}

    if ($a % 2 == 0){
        echo " $a  Genap<br>";
    }else{
        echo " $a  Ganjil<br>";
    }
?>

