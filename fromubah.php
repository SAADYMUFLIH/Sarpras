<?php
    include 'koneksi.php';

    $id_siswa = $_GET['id_siswa'];
    $sql = " SELECT * FROM peminjaman WHERE id_siswa = '$id_siswa' ";
    $query = mysqli_query ($connect, $sql);
    $pel = mysqli_fetch_assoc ($query);

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
    <title>Peminjaman</title>
</head>
<body>
     <div>
        <form action="simpan.php" method="post">
            <h3>Tambah Data Peminjam </h3>
            <p><label>ID Siswa         :<input value="<?php echo $pel['id_siswa']?>" type="number" required name="id_siswa"></label></p>
            <p><label>Nama Siswa       :<input value="<?php echo $pel['nama_siswa']?>"type="text" required name="nama_siswa"></label></p>
            <p><label>Kelas            :<input value="<?php echo $pel['kelas']?>"type="text" required name="kelas"></label></p>
            <p><label>Alamat           :<input value="<?php echo $pel['alamat']?>"type="text" required name="alamat"></textarea></label></p>
            <p><label>Email            :<input value="<?php echo $pel['email']?>"type="Email" required name="email"></label></p>
            <p><label>Jenis barang     :<input value="<?php echo $pel['jenis_barang']?>"type="text"required name="jenis_barang"></label></p>
            <p><label>Jumlah barang    :<input value="<?php echo $pel['jumlah_barang']?>"type="text" required name="jumlah_barang"></label></p>
            <p><label>Waktu Peminjaman :<input value="<?php echo $pel['waktu_peminjaman']?>"type="text" required name="waktu_peminjaman"></label></p>
            <input type="simpan" name="simpan" value="simpan">
        </form>
     </div>
</body>
</html>