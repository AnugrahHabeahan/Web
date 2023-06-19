<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <h1>Associative Arrays</h1>
    <ul>
        <li>
            <a href="index.php">Indexed Arrays</a>
        </li>
        <li>
            <a href="aa.php">Associative  Arrays</a>
        </li>
        <li>
            <a href="ma.php">Multidimensional Arrays</a>
        </li>
    </ul>
    <hr>
    <?php
    $umur = array("Nanda" => "20","Aryok" => "21", "Bintang" => "15");
    // var-dump($umur);
    // echo $umur["Nanda"];
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
        </tr>
        <?php
        $number = 1;
        foreach($umur as $u => $u_value) : ?>
        <tr>
            <td><?= $number++ ?></td>
            <td><?= $u; ?></td>
            <td><?= $u_value; ?></td>
        </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>