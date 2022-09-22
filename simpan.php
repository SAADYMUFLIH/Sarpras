<?php
include 'koneksi.php';

if (isset($_POST['simpan'])){
    $id_siswa = $_POST['id_siswa']; 
    $nama_siswa = $_POST['nama_siswa']; 
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat']; 
    $email = $_POST['email'];
    $jenis_barang = $_POST['jenis_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $waktu_peminjaman= $_POST['waktu_peminjaman'];

    $sql = "INSERT INTO `peminjaman`(`id_siswa`, `nama_siswa`, `kelas`, `alamat`, `email`, `jenis_barang`, `jumlah_barang`, `waktu_peminjaman`) 
            VALUES ('$id_siswa','$nama_siswa','$kelas','$alamat','$email','$jenis_barang','$jumlah_barang','$waktu_peminjaman')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: data-pelanggan.php');
    }else {
        header('Location: simpan.php?status=gagal'); 
    }
}
?>