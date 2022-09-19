<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>UJI LEVEL</title>
</head>
<body>
    <h3>Data peminjaman</h3>
    <h4><a href="peminjaman.html">[+]Tambah</a></h4>
    <table border="2" cellpadding="20" cellspacing="0">
        <tr>
            <th>ID Siswa          </th>
            <th>Nama Siswa        </th>
            <th>Kelas             </th>
            <th>Alamat            </th>
            <th>Email             </th>
            <th>Jenis barang      </th>
            <th>Jumlah barang     </th>
            <th>Waktu peminjaman  </th>
            <th>Action            </th>
        </tr>
        <?php
            $sql="SELECT * FROM peminjaman";
            $query = mysqli_query($connect, $sql);
             while ($pel =mysqli_fetch_array($query)){
                echo "
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
                     <a href='fromubah.php?id_siswa=".$pel['id_siswa']."'>ubah</a>
                     </td>
             </tr>";
            
            }
        ?>
    </table>
</body>
</html>