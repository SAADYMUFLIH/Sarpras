<?php
include 'koneksi.php';

$no_barang = $_GET['no_barang'];
$sql = "SELECT * FROM barang WHERE no_barang='$no_barang'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data barang</title>
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
    <form action="edit-barang.php" method="post">
        <div class="h3-tambah">
           <h3> Edit Data barang</h3>
        </div>
        <div class="part">
           <label>No barang :</label>
           <input value="<?php echo $pel ['no_barang']?>" required="required" type="hidden" name="no_barang">
        </div>
        <div class="part">
           <label>Jenis barang :</label>
           <input value="<?php echo $pel ['jenis_barang']?>"required="required" type="text" name="jenis_barang">
        </div>
        <div class="part">
           <label>Spesifikasi : </label>
           <input value="<?php echo $pel ['spesifikasi']?>" required="required" type="text" name="spesifikasi">
        </div>
           <div class="simpan-tambah">
           <input type="submit" name="simpan" value="simpan">
        </div>   
    </form>
     </div>
</body>
</html>