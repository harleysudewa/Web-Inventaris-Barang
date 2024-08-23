<?php
// Koneksi ke database
 include 'koneksi.php';

// Menangkap data dari form
$nama_peminjam = $_POST['nama_peminjam'];
$nama_barang = $_POST['nama_barang'];
$jumlah_peminjaman = $_POST['jumlah_peminjaman'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];

// Query untuk meminjam barang
$sql = "INSERT INTO peminjaman (nama_peminjam, nama_barang, jumlah_peminjaman, tanggal_peminjaman)
		VALUES ('$nama_peminjam', '$nama_barang', '$jumlah_peminjaman', '$tanggal_peminjaman')";
$result_sql = mysqli_query($koneksi, $sql);

// Mengambil data barang

$query = "SELECT jumlah_barang FROM tugas4";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$jumlah_barang = $row['jumlah_barang'];

if ($jumlah_peminjaman <= $jumlah_barang) {
    // Mengupdate jumlah barang di tabel setelah adanya peminjaman
    $jumlah_terbaru = $jumlah_barang - $jumlah_peminjaman;
    $query_update = "UPDATE tugas4 SET jumlah_barang = '$jumlah_terbaru'";
    $result_update = mysqli_query($koneksi, $query_update);
    if (mysqli_query($koneksi, $query_update)) {
        header("location:index.php");
    } else {
        echo "Error: " . $query_update . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Jumlah barang yang dipinjam melebihi yang tersedia.";
}
?>