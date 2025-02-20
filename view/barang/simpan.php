<?php

$id_barang = $_POST['id_barang'];
$id_barang = $_POST['nama_barang'];
$id_barang = $_POST['id_jenis'];
$id_barang = $_POST['harga'];
$id_barang = $_POST['stok'];

include ',,/../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO barang
VALUES('$id_barang','$nama_barang','$id_jenis','$harga','$stok','$warna')");

if($query){
    echo "<script>alert('Tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alter('Tambah gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}
