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
    
        $sql = "UPDATE peminjaman SET nama_siswa='$nama_siswa', kelas='$kelas', alamat='$alamat', email='$email', jenis_barang='$jenis_barang',jumlah_barang='$jumlah_barang', waktu_peminjaman='$waktu_peminjaman'WHERE id_siswa='$id_siswa'"; 
    
        $query = mysqli_query($connect, $sql);
    
        if($query){
            header('Location: data-pelanggan.php');
        }else {
            header('Location: edit.php?status=gagal'); 
        }
    }
?>