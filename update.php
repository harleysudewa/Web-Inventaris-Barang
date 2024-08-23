<?php
include 'koneksi.php';

$id = $_POST['id'];
$tanggal_barang = $_POST['tanggal_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$kondisi_barang = $_POST['kondisi_barang'];
$penanggung_jawab = $_POST["penanggung_jawab"];

$query="UPDATE tugas4 SET tanggal_barang='$tanggal_barang',nama_barang='$nama_barang',jenis_barang='$jenis_barang',jumlah_barang='$jumlah_barang',kondisi_barang='$kondisi_barang',penanggung_jawab='$penanggung_jawab' WHERE id='$id';";
mysqli_query($koneksi, $query);

header("location:index.php");
?>