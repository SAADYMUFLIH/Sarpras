<?php
    include 'koneksi.php';
    
    $no_barang = $_GET['no_barang'];

    $sql="DELETE FROM barang WHERE no_barang='$no_barang'";
    $query= mysqli_query($connect, $sql);

    if($query){
        header('Location: data-barang.php');
    }else{
        header('location: hapus-barang.php?status=gagal');
    }
?>