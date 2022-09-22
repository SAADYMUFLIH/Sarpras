<?php
    include 'koneksi.php';
    
    $id_siswa = $_GET['id_siswa'];

    $sql="DELETE FROM peminjaman WHERE id_siswa='$id_siswa'";
    $query= mysqli_query($connect, $sql);

    if($query){
        header('Location: data-pelanggan.php');
    }else{
        header('location: hapus.php?status=gagal');
    }
?>