<?php 

$id_barang =$_GET['id_barang'];
$nama = $_POST['nama'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];

include '../../config/koneksi.php';

$query = mysqli_query( $conn,
query: "DELETE FROM barang WHERE id_barang='$id_barang'");

if($query){
    echo"<script>alert('Data berhasil dihapus')<?script>";
    echo"<script>window.location.href='index.php'</script>";
}else{
    echo"<script>alert('Data gagal dihapus')<?scripr>";
    echo"<script>window.location.href='view_tambah.php'</script>";
}
