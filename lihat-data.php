<?php
include("koneksi.php");
?>

 <h1>Data Inventaris Alat dan Bahan LAB RPL </h1>
  <a href=index.php><input type = "button" value="Kembali"></a>
  <a href=tambah.php><input type = "button" value="Tambah"></a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama User</th>
        <th>Jabatan</th>
        <th>Nama Bahan</th>
        <th>Jenis Bahan</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Kondisi</th>
        <th>Tanggal Masuk</th>
    </tr>
    <?php
include("koneksi.php");
$sql="SELECT * FROM tb_bahan INNER JOIN tb_user ON tb_bahan.id_bahan=tb_user.id_bahan";
$query=mysqli_query($koneksi,$sql);
   
while($row=mysqli_fetch_array($query)){

          echo "<tr>";
          echo "<td>".$row['id_bahan']."</td>";
          echo "<td>".$row['nama_user']."</td>";
          echo "<td>".$row['jabatan']."</td>";
          echo "<td>".$row['nama_bahan']."</td>";
          echo "<td>".$row['jenis_bahan']."</td>";
          echo "<td>".$row['stok']."</td>";
          echo "<td>".$row['harga']."</td>";
          echo "<td>".$row['kondisi']."</td>";
          echo "<td>".$row['tgl_masuk']."</td>";
         
          echo "<td>";
          echo "<a href='edit.php?id_user=".$row['id_user']."'>Edit</a> |";
          echo "<a href='hapus.php?id_user=".$row['id_user']."'>Hapus</a> ";
          echo "</td>";
          echo "</tr>";
     }
     ?>
     </table>
    </body>
    </html>
