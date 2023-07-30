<?php 
require "controllers/functions.php";  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Selamat Datang di Halaman Buku</h1>
    <hr>
    <ul>
        <a href="index.php">
           <li>Data Buku</li> 
        </a>
        <a href="Pinjam.php">
        
        <li>Pinjam Buku</li>
    </a>
    </ul>
    <a href="tambah_buku.php">Tambah Buku</a>
    <table border="1">
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Tahun Terbit</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Update</th>
        <th>Opsi</th>
    </tr>
        <?php
        foreach (buku() as $b) : ?>
            <tr>
                <td><?= @$b["id"]; ?></td>
                <td><?= @$b["judul_buku"]; ?></td>
                <td><?= @$b["tahun_terbit"]; ?></td>
                <td><?= @$b["penulis"]; ?></td>
                <td><?= @$b["penerbit"]; ?></td>
                <td><?= @$b["simpan"]; ?></td>
                <td>
                    <a href="edit_buku.php?id=<?=$b["id"] ?>">Edit</a>
                    <a href="javascript:hapus('controllers/hapus_buku.php?id=<?= $b["id"] ?>')">Hapus</a>
                </td>
            </tr>
        <?php endforeach;
        ?>
   
    </table>

    <script>
        function hapus(url) {
            if (confirm("Apakah data berikut akan dihapus?")) {
                document.location = url
            }
        }
    </script>
    
</body>
</html>