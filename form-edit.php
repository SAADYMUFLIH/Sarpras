<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM peminjaman WHERE id_siswa='$id_siswa'";
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
    <title>Edit Data</title>
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
    <form action="edit.php" method="post">
        <div class="h3-tambah">
           <h3> Edit Data pelanggan</h3>
        </div>
        <div class="part">
           <label>ID Siswa :</label>
           <input value="<?php echo $pel ['id_siswa']?>" required="required" type="hidden" name="id_siswa">
        </div>
        <div class="part">
           <label>Nama Siswa :</label>
           <input value="<?php echo $pel ['nama_siswa']?>"required="required" type="text" name="nama_siswa">
        </div>
        <div class="part">
           <label>Kelas :</label>
           <input required="required" name="kelas" value="<?php echo $pel ['kelas']?>">
        </div>
        <div class="part">
           <label>Alamat : </label>
           <input value="<?php echo $pel ['alamat']?>" required="required" type="text" name="alamat">
        </div>
        <div class="part">
           <label>Email :</label>
           <input value="<?php echo $pel ['email']?>"required="required" type="text" name="email">
        </div>
        <div class="part">
           <label>Jenis Barang :</label>
           <input value="<?php echo $pel ['jenis_barang']?>"required="required" type="text" name="jenis_barang">
        </div>
        <div class="part">
           <label>Jumlah Barang :</label>
           <input value="<?php echo $pel ['jumlah_barang']?>"required="required" type="text" name="jumlah_barang">
        </div>
        <div class="part">
           <label>Waktu Peminjaman :</label>
           <input value="<?php echo $pel ['waktu_peminjaman']?>"required="required" type="text" name="waktu_peminjaman">
        </div>
           <div class="simpan-tambah">
           <input type="submit" name="simpan" value="simpan">
        </div>   
    </form>
     </div>
</body>
</html>