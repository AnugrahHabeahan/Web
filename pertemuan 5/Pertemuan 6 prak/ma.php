<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Multidimensional Arrays</h1>
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


    <?php
    $tekologi = array(
     array(   
        array("Laravel","Framework","Web"),
        array("React Native","Mobile"),
        array("Codeigniter","Framework","Web"),
        array("Flutter","Framework","Mobile"),
        array("Phyton","Program Language","Mobile and Web")
     ),
     array(
        array("Martin Otwel","Founder","Framework Laravel"),
        array("Naber Dabit","Founfer and CEO","Framework React Native"),
        array("EllisLab","Founder","Codeigniter PHP"),
        array("Navneet Dalal","Subsidiary","Flutteer App"),
        array("Guido van Rossun","Created","Python Institute")
     )     
    
    );
    //var_dump($tekologi);
    //echo $tekologi[1][0][2];
    $jumlah_teknologi = count($tekologi);

    ?>
    <table border="1" style = "border-collapse : collapse">

    <tr>
        <th>No</th>
        <th>Nama Pemrograman</th>
        <th>Jenis</th>
        <th>Platform</th>
    </tr>
    <?php for ($i=0; $i < $jumlah_teknologi; $i++) { 
    $jumlah_isi_teknologi = count($tekologi[$i]);    
        ?>
    
    <tr>
        <td><?php echo $i+1; ?></td>
        <?php for($x=0; $x < $jumlah_isi_teknologi; $x++) {?>
         <td><?php echo $tekologi[$i][$x]; ?></td>   
        <?php} ?>
        <td><?php echo $tekologi [$i][0][0] ?></td>
        
    </tr>
        <?php }?>
    </table>

           
</body>
</html>