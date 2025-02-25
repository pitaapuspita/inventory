<?php

$id_barang =$_POST['id_barang'];
$nama = $_POST['nama'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO barang VALUES('$id_barang','$nama','$id_jenis','$harga')");

if($query){
    echo"<script>alert('data berhasil ditambah')<?script>";
    echo"<script>window.location.href='index.php'</script>";
}else{
    echo"<script>alert('Data gagal ditambah')<?script>";
    echo"<script>window.location.href='view_tambah.php'</script>";
}