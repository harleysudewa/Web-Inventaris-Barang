<?php

include 'koneksi.php';

$tanggal_barang = $_POST['tanggal_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$kondisi_barang = $_POST['kondisi_barang'];
$penanggung_jawab = $_POST["penanggung_jawab"];

$sql = "INSERT INTO tugas4 (tanggal_barang, nama_barang, jenis_barang, jumlah_barang, kondisi_barang, penanggung_jawab)
		VALUES ('$tanggal_barang', '$nama_barang', '$jenis_barang', '$jumlah_barang', '$kondisi_barang', '$penanggung_jawab')";

if (mysqli_query($koneksi, $sql)) {
	header("location:index.php");
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>