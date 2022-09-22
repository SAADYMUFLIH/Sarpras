<?php
    include 'koneksi.php';
    
    if (isset($_POST['simpan'])){
        $no_barang = $_POST['no_barang']; 
        $jenis_barang = $_POST['jenis_barang']; 
        $spesifikasi = $_POST['spesifikasi']; 
    
        $sql = "UPDATE barang SET jenis_barang='$jenis_barang', spesifikasi='$spesifikasi' WHERE no_barang='$no_barang'"; 
    
        $query = mysqli_query($connect, $sql);
    
        if($query){
            header('Location: data-barang.php');
        }else {
            header('Location: edit-barang.php?status=gagal'); 
        }
    }
?>