<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Menghitung Luas Keliling Lingkaran </h2>
    <form action="" method="POST">
        <br><br>
        <tr>
            <td>Masukan Jari Jari</td>
            <td><input type="text" name="jari2"></input>
        </tr><br>
        <input type="submit" name="simpan" value="simpan" align="center"></input> <br>

        <?php
        if (isset($_POST['simpan'])) {
            $jari2 = $_POST['jari2'];

            function luas($jari2, $phi = 3.14){
                $luas = $phi * $jari2 * $jari2;
                return $luas;
            }
            function semuakeliling($jari2, $phi = 3.14){
                $keliling = 2 * ($jari2 * $phi);
                return $keliling;
        }
        echo "<tr>";
        echo "<td> Jari - jari Lingkaran </td> <td>:</td> <td>$jari2</td>" , "</tr>";
        echo "<br>";

        echo "<tr>";
        echo "<td> Luas Lingkaran </td> <td>:</td> <td>" . luas($jari2) ."<td>" , "</tr>";
        echo "<br>";
        
        echo "<tr>";
        echo "<td> Keliling Lingkaran </td> <td>:</td> <td>" .semuakeliling($jari2) ."<td>" , "</tr>";
    }

        
        ?>
    </form>
    
</body>
</html>