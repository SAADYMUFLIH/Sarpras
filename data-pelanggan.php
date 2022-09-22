<?php
include 'koneksi.php'

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

    <title>data pelanggan</title>
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
    <h1>Data peminjaman</h1>
    <br>
    <h3><a href="tambah-data-peminjaman.html">Tambah</a></h3>
    <table border="2" cellpadding="10" cellspacing="0">
        <tr class="judul">
            <th>ID Siswa</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Jenis barang</th>
            <th>Jumlah barang</th>
            <th>Waktu peminjaman</th>
            <th>Action</th>
        </tr>
       <tr>
        <?php
        $sql="SELECT * FROM peminjaman";
        $query= mysqli_query($connect, $sql);
        while($pel = mysqli_fetch_array($query)){
            echo"
                <tr>
                <td>$pel[id_siswa]</td>
                <td>$pel[nama_siswa]</td>
                <td>$pel[kelas]</td>
                <td>$pel[alamat]</td>
                <td>$pel[email]</td>
                <td>$pel[jenis_barang]</td>
                <td>$pel[jumlah_barang]</td>
                <td>$pel[waktu_peminjaman]</td>
                <td>
                <div class='btn-action'>
                    <a href='form-edit.php?id_siswa=".$pel['id_siswa']."'><button>Edit</button></a>
                    <a href='hapus.php?id_siswa=".$pel['id_siswa']."'><button>Hapus</button></a>
                </diV>
                </td>
                </tr>";
        };

        ?>
       </tr>
    </table>
    </div>
</body>
</html>