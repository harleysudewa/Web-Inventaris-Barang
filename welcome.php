<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Inventaris Barang - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="DataTables/datatables.min.css">
    <script src="DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#dt').DataTable();
        });
        $(document).ready(function(){
            $('#dx').DataTable();
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="welcome.php">
    <img src="logo-gkjw.jpg" width="40" height="40" class="d-inline-block align-center" alt="">
  </a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form-input.php">Input Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form-peminjaman.php">Peminjaman Barang</a>
      </li>
    </ul>
    <a class="nav-link" href="reset-password.php"> Reset Password </a>
    <a href="logout.php" class="text-danger"> Sign Out </a>
  </div>
</nav>
<br><h2>Tabel Inventaris Barang GKJW</h2><br>
<p><b>U: </b>Umum</p>
<p><b>E: </b>Elektronik</p>
<p><b>I: </b>Perlengkapan Ibadah</p>
    <div class="container w-50">
        <table id="dt" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Tanggal Masuk</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Jumlah</th>
                    <th>Kondisi</th>
                    <th>Penanggung Jawab</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'koneksi.php';
            $id20338071_khordell = mysqli_query($koneksi, "SELECT * FROM tugas4");
            while ($row = mysqli_fetch_array($id20338071_khordell)) {
                echo "
                            <tr>
                                <td>" . $row['tanggal_barang'] . "</td>
                                <td>" . $row['nama_barang'] . "</td>
                                <td>" . $row['jenis_barang'] . "</td>
                                <td>" . $row['jumlah_barang'] . "</td>
                                <td>" . $row['kondisi_barang'] . "</td>
                                <td>" . $row['penanggung_jawab'] . "</td>
                                <td><a href='form-edit.php?id=$row[id]'>Edit</a>
                                    <a href='delete.php?id=$row[id]'>Delete</a>
                                </td>
                            </tr>
                    ";
            }
            ?>
            <tbody>
        </table> <br><br><br><br>
        <h2>Tabel Peminjaman Barang GKJW</h2><br>
        <table id="dx" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nama Peminjam</th>
            <th>Nama Barang</th>
            <th>Jumlah Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status Pengembalian</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Koneksi ke database
             include 'koneksi.php';
            $id20338071_khordell = mysqli_query($koneksi, "SELECT * FROM peminjaman");
            while ($row = mysqli_fetch_array($id20338071_khordell)) {
            echo "<tr>";
            echo "<td>".$row['nama_peminjam']."</td>";
            echo "<td>".$row['nama_barang']."</td>";
            echo "<td>".$row['jumlah_peminjaman']."</td>";
            echo "<td>".$row['tanggal_peminjaman']."</td>";
            echo "<td>".$row['tanggal_pengembalian']."</td>";
            echo "<td>".($row['status_pengembalian'] == 1 ? "Sudah Dikembalikan" : "Belum Dikembalikan")."</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    </div>
    <br>
    <div class="alert alert-black bg-light" role="alert">
  You are now logged in as <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.
  </div>
</body>
</html>