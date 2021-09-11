<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Biodata Fungsi</legend>
        <table>
        <form action=" " method="POST">
            <tr>
            <td align="center">Nama : </td>
            <td><input type='text' name='nama'></td>
</tr>
<tr>
<td align="center">Jenis Kelamin : </td>
<td>
<input type='radio' name="jeniskel" value="jenis">Laki Laki </input>
<input type='radio' name="jeniskel" value="jenis2">Wanita </input>
</td>
</tr>
<tr>
            <td align="center">Tanggal Lahir : </td>
            <td><input type='date' name='tl'></td>
</tr>
<tr>
<td align="center">Agama : </td>
<td><select name='agama' value='kode'>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
<option value="Konghuchu">Konghuchu</option>
</select>
</td>
</tr>
<tr>
            <td align="center">Alamat : </td>
            <td><input type='textarea' name='alamat'></td>
</tr>
            <td align="center">Hobi : </td>
            <td>
            <label><input type="checkbox" name="hobi[]" value="Belajar" />Belajar</label>
            <label><input type="checkbox" name="hobi[]" value="Main Bola" />Main Bola</label>
            <label><input type="checkbox" name="hobi[]" value="Renang" />Renang</label>
            <label><input type="checkbox" name="hobi[]" value="Main Game" />Main Game</label>
            <label><input type="checkbox" name="hobi[]" value="Ngoding" />Ngoding</label>
            <label><input type="checkbox" name="hobi[]" value="Main Voli" />Main Voli</label>
</td>
</tr>
<?php
    if (isset($_POST['simpan'])) {
        $nama = @$_POST['nama'];
        $jeniskel = @$_POST['jeniskel'];
        $tl = @$_POST['tl'];
        $agama = @$_POST['agama'];
        $alamat = @$_POST['alamat'];
        $hobi = @$_POST['hobi'];

    function biodata($nama="",$jeniskel="",$tl="",$agama="",$alamat="",$hobi=""){

        echo "<tr>";
        $bio = "<td> Nama Lengkap </td> <td>:</td> " . "<td>$nama</td>" . "</tr>";
    
        echo "<tr>";
        $bio .= "<td> Jenis Kelamin </td> <td>:</td> <td>$jeniskel</td> </tr>";

        echo "<tr>";
        $bio .= "<td> Tanggal Lahir </td> <td>:</td> <td>$tl</td> </tr>";

        echo "<tr>";
        $bio .= "<td> Agama </td> <td>:</td> <td>$agama</td> </tr>";

        echo "<tr>";
        $bio .= "<td> Alamat </td> <td>:</td> <td>$alamat</td> </tr>";

        echo "<tr>";
        $bio .="<td>Hobi</td> <td>:</td>";
        
        return $bio;
    }
        echo biodata($nama,$jeniskel.$tl,$agama,$alamat,$hobi);
    }
  ?>
  </form>
        </table>
        <input align="center" type="submit" name ="simpan" value='KIRIM'>
    </fieldset>
</body>
</html>