<?php
include 'koneksi.php';

if (isset($_POST['simpan'])){
    $no_barang = $_POST['no_barang']; 
    $jenis_barang = $_POST['jenis_barang']; 
    $spesifikasi = $_POST['spesifikasi']; 

    $sql = "INSERT INTO `barang`(`no_barang`, `jenis_barang`, `spesifikasi`) 
            VALUES ('$no_barang','$jenis_barang','$spesifikasi')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: data-barang.php');
    }else {
        header('Location: simpan-barang.php?status=gagal'); 
    }
}
?>