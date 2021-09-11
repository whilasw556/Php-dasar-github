<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h2>Masukan Jumlah</h2>
    <form action="" method="POST"> <table border=1>
    <tr><td>Masukan Bilangan <input type="text" name="jumlah"></td>
    <td> <input type="submit" name="submit" value="submit"></td>
    </tr></table></form>
    <h2>Masukan Nilai</h2>
<?php
if(isset($_POST['submit'])){
    $a = $_POST ['jumlah'];
    $bin = $_POST ['jumlah'];

    for($a = 1; $a <= $bin; $a++){
        echo "Bilangan ke ".$a."<input type='text' name='input'".$a."'><br>";
    }
    echo "<input type='hidden'>";
    echo "<input type='submit' value='get'".$a."'><br>";

    if  ($a % 2 == 0){
        echo "$a adalah bilangan genap<br>";
    }else {
        echo "$a adalah bilangan ganjil<br>";
    }
}
?>
</body>
</html>