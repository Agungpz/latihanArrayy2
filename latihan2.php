<?php

$produk = [
    [
        "no" => 1,
        "nama_produk" => "Sepatu Nike Black Edition",
        "harga" => 5000000,
        "foto" => "anime(1).jpg",
        "stok" => 50,
        "status" => "Tersedia"
    ],
    [
        "no" => 2,
        "nama_produk" => "Kapal Karam Slawi",
        "harga" => 6000000,
        "foto" => "anime(2).jpg",
        "stok" => 0,
        "status" => "Tidak Tersedia"
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>PejetttStore | Toko Segala Macam Benda Murah dan terpercaya</h1>
<h2>Data Produk</h2>
<table border="1" cellpadding="10" cellspacing="0" >
    <tr>
        <th>No</th>
        <th>Nama Produk </th>
        <th>Harga</th>
        <th>Foto</th>
        <th>Stok</th>
        <th>Status</th>
    </tr>
    <?php foreach($produk as $s) : ?>
    <tr>
        <td><?= $s["no"] ?></td>
        <td><?= $s["nama_produk"] ?></td>
        <td><?= $s["harga"] ?></td>
        <td><img src="<?= $s["foto"] ?>" width="128px" alt=""></td>
        <td><?= $s["stok"] ?></td>
        <?php 
        if($s["status"] == "Tersedia"){?>
        <td style="color : green;"><?= $s["status"]; ?></td>
        <?php } else { ?>
            <td style="color : red;"><?= $s["status"]; ?></td>
        <?php } ?> 
      
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>