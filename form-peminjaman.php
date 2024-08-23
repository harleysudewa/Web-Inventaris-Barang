<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        body{ font: 14px sans-serif; }
        .container{width: 360px; padding: 20px;}
    </style>
    <link rel="stylesheet" href="DataTables/datatables.min.css">
    <script src="DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#dt').DataTable();
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
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form-input.php">Input Barang</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form-peminjaman.php">Peminjaman Barang<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <a class="nav-link" href="reset-password.php"> Reset Password </a>
    <a href="logout.php" class="text-danger"> Sign Out </a>
  </div>
</nav>
        <div class="container">
		<form action="proses_peminjaman.php" method="post">
		    <h2>Peminjaman Barang</h2>
		    
			<label>Nama Peminjam :</label><br>
			<input type="text" name="nama_peminjam" required><br><br>
	        
            <label for="nama_barang">Barang yang Dipinjam :</label><br>
		    <select id="nama_barang" name="nama_barang" required>
				<option value="">Pilih Barang</option>
				<?php
				// Koneksi ke database
				include 'koneksi.php';
				$query = "SELECT * FROM tugas4 WHERE jumlah_barang > 0";
				$result = mysqli_query($koneksi, $query);
	
				// Loop untuk menampilkan data barang
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<option value='".$row['id']."'>".$row['nama_barang']." (Tersedia: ".$row['jumlah_barang'].")</option>";
				}
	
				// Menutup koneksi database
				mysqli_close($koneksi);
				?>
			</select><br><br>
	
			<label>Jumlah Peminjaman :</label>
			<input type='number' name='jumlah_peminjaman' min='1' required><br><br>
	
			<label>Tanggal Peminjaman :</label><br>
			<input type="date" name="tanggal_peminjaman" required><br><br>
	
			<input type="submit" value="Submit" class="btn btn-primary"> <a class="btn btn-link ml-2" href="index.php">Kembali</a></td></tr><br>
		</form>
        </div>
	</body>
	</html>