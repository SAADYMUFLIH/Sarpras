<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!--font roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <title>data barang</title>
</head>
<body>
    <div class="container-1">
    <header>Sarpras Starbhak</header>
        <ul>
            <li><a href="data-barang.php">Data barang</a></li>
            <li><a href="data-pelanggan.php">Data peminjaman</a></li>
        </ul>

    </div>

    <div class="container-2">
    <h1>Data barang</h1>
    <br>
    <h3><a href="tambah-data-barang.html">Tambah</a></h3>
    <table border="2" cellpadding="10" cellspacing="0">
        <tr class="judul">
            <th>No Barang</th>
            <th>Jenis barang</th>
            <th>Spesifikasi</th>
            <th>Action</th>
        </tr>
       <tr>
        <?php
        $sql="SELECT * FROM barang";
        $query= mysqli_query($connect, $sql);
        while($pel = mysqli_fetch_array($query)){
            echo"
                <tr>
                <td>$pel[no_barang]</td>
                <td>$pel[jenis_barang]</td>
                <td>$pel[spesifikasi]</td>

                <td>
                    <a href='form-edit-barang.php?no_barang=".$pel['no_barang']."'><button class='merah'>Edit</button></a>
                    <a href='hapus-barang.php?no_barang=".$pel['no_barang']."'><button class='hijau'>Hapus</button></a>
                </td>
                </tr>";
        };

        ?>
       </tr>
    </table>
    </div>
</body>