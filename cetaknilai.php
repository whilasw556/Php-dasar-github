<html>
    <head>
        <title>Data Siswa</title>
        <style>
        body{
        background-image: url("draken.jpg");
        }
    </style>
</head>
<body>
<center> 
<h4>Form Cetak Nilai Siswa<br>SMK ASSALAM BANDUNG
<br>Tahun 2021/2022</h4>
 

 <table border = '1' bgcolor='00FF00'>
     <tr>
    <td align='left'  colspan=3>
     <form method = 'POST' action = 'cetaknilai2.php'>
         <b>Nama :</b>
         <input type='text' name='nama[]'>
         <br>
         <b>NIS     :</b>  
         <input type='number' name='nis[]'>
</td>
</tr>

 <tr size='1'>
 <th > No </th>
 <th> Mata Pelajaran </th>
 <th >Nilai</th>
</tr>

<tr>
    <td align='center' >1</td>
    <td>Pedidikan Agama Islam</td>
    <td align='center'><input type='text' name="pai[]" size='1'></td>
</tr>
<tr>
    <td align='center'>2</td>
    <td>PPKN</td>
    <td align='center'><input type='text' name="pkn[]" size='1'></td>
</tr>
<tr>
    <td align='center'>3</td>
    <td>Bahasa Indonesia</td>
    <td align='center'><input type='text' name="indo[]" size='1'></td>
</tr>
<tr>
    <td align='center'>4</td>
    <td>Matematika</td>
    <td align='center'><input type='text' name="mtk[]" size='1'> </td>
</tr>
<tr>
    <td align='center'>5</td>
    <td>Bahasa Inggris</td>
    <td align='center'><input type='text' name="binggris[]" size='1'></td>
</tr>
<tr>
    <td align='center'>6</td>
    <td>Produk kreatif dan Kewirausahaan</td>
    <td align='center'><input type='text' name="kwu[]" size='1'></td>
</tr>
<tr>
    <td align='center'>7</td>
    <td>Al Quran</td>
    <td align='center'><input type='text' name="alquran[]" size='1'></td>
</tr>
<tr>
    <td align='center'>8</td>
    <td>Bimbingan Konseling</td>
    <td align='center'><input type='text' name="bk[]" size='1'></td>
</tr>
<tr>
    <td align='center'>9</td>
    <td>Produktif RPL</td>
    <td align='center'><input type='text' name="rpl[]" size='1'></td>
</tr>
<tr>
    <td align='center'>10</td>
    <td>Produktif TKJ</td>
    <td align='center'><input type='text' name="tkj[]" size='1'></td>
</tr>

  
</table>
<br><br>
    <input type="submit" name="submit" value="CETAK NILAI"/>
</form>
</body>
</html>  