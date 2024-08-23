<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_id20338071_khordell  = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from tugas4 where id='$id_id20338071_khordell'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>