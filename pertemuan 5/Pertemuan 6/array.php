<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</html>
<?php
$mobil = array("Xenia","Alpard","Cayla")
// var_dump($mobil);
// echo $mobil[2];
?>
<table border="1" style="border-collapse: collapse">
<tr>
    <th>No</th>
    <th>Nama Mobil</th>
</tr>
<tr>
    <td>1</td>
    <td><?=$mobil[0]?></td>
</tr>
<tr>
    <td>2</td>
    <td><?=$mobil[1]?></td>
</tr>
<tr>
    <td>3</td>
    <td><?=$mobil[2]?></td>
</tr>
</table>
</body>
