<?php
include ("koneksi.php");
if(!isset($_GET['id_user'])){
    header("location:lihat-data.php?");
}
$id = $_GET['id_user'];
$sql = "SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan WHERE tb_user.id_user='$id'";
$query = mysqli_query($koneksi, $sql);
$ok = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1){
     die ("DATA TIDAK DITEMUKAN");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM EDIT</h1>
    <a href="lihat-data.php"><input type="button" value="kembali"></a>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id_user" value=<?php echo $ok['id_user']?> />
        <p>
            <label for="nama_user">Nama User: </label>
            <input type="text" name="nama_user" value=<?php echo $ok['nama_user']?> />
        </p>
        <p>
            <label for="jabatan">Jabatan: </label>
            <input type="text" name="jabatan" value=<?php echo $ok['jabatan']?> />
        </p>
        <p>
            <label for="nama_bahan">Nama Bahan: </label>
            <input type="text" name="nama_bahan" value=<?php echo $ok['nama_bahan']?> />
        </p>
        <p>
            <label for="jenis_bahan">Jenis Bahan: </label>
            <input type="text" name="jenis_bahan" value=<?php echo $ok['jenis_bahan']?> />
        </p>
        <p>
            <label for="stok">Stok: </label>
            <input type="number" name="stok" value=<?php echo $ok['stok']?> />
        </p>
        <p>
            <label for="harga">Harga: </label>
            <input type="number" name="harga" value=<?php echo $ok['harga']?> />
        </p>
        <p>
            <label for="kondisi">Kondisi: </label>
            <label><input type="radio" name="kondisi" Value="baik"<?php echo $ok['kondisi']?> />Baik</label>
            <label><input type="radio" name="kondisi" Value="rusak"<?php echo $ok['kondisi']?> />Rusak</label>
        <p>
            <label for="tgl_masuk">Tanggal Masuk: </label>
            <input type="date" name="tgl_masuk" value=<?php echo $ok['tgl_masuk']?> />
        </p>
        <p>
            <input type="submit" value="Edit" name="edit"/>
        </p>
       
</body>
</html>