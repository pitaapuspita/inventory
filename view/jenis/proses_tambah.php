<?php

$id_jenis =$_POST['id_jenis'];
$nama = $_POST['nama'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO jenis VALUES('$id_jenis','$nama')");

echo "
<script>
alert('input data berhasil');
</script>
<script>
window.location.href = 'index.php';
";