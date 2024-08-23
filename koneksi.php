<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "id20338071_daddyharley";
$password   =   "Bapakiwan100!";
$database   =   "id20338071_khordell";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
	die("Koneksi gagal: " . mysqli_connect_error());
}

?>