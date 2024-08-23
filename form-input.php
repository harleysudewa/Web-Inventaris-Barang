<!DOCTYPE html>
<html>
<head>
	<meta charset= "UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Inventaris Barang - Input Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{ font: 14px sans-serif; }
        .container{width: 360px; padding: 20px;}
    </style>
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
        <a class="nav-link" href="welcome.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form-input.php">Input Barang<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form-peminjaman.php">Peminjaman Barang</a>
      </li>
    </ul>
    <a class="nav-link" href="reset-password.php"> Reset Password </a>
    <a href="logout.php" class="text-danger"> Sign Out </a>
  </div>
</nav>
    <div class="container">
	<form action="simpan.php" method="post" enctype="multipart/form-data">
	    <h2>Input Data Barang</h2>

		<label for="tanggal_barang">Tanggal Masuk Barang :</label><br>
	    <input type="date" id="tanggal_barang" name="tanggal_barang" required><br><br>

		<label for="nama_barang">Nama Barang :</label><br>
        <input type="text" id="nama_barang" name="nama_barang" required><br><br>

		<label for="jenis_barang">Jenis:</label><br>
		<input type="radio" id="jenis_barang" name="jenis_barang" value="U" required>Umum<br>
		<input type="radio" id="jenis_barang" name="jenis_barang" value="E" required>Elektronik<br>
		<input type="radio" id="jenis_barang" name="jenis_barang" value="I" required>Perlengkapan Ibadah<br><br>
		
		<label for="jumlah_barang">Jumlah (pcs) :</label><br>
		<input type="number" id="number" name="jumlah_barang" required><br><br>

		<label for="kondisi_barang">Kondisi :</label><br>
		<select id="kondisi_barang" name="kondisi_barang" required>
			<option value="Baik">Baik</option>
			<option value="Cacat">Cacat</option>
			<option value="Rusak">Rusak</option>
		</select><br><br>
		
		<label for="penanggung_jawab">Penanggung Jawab:</label><br>
        <input type="text" id="penanggung_jawab" name="penanggung_jawab" required><br><br>

		<input type="submit" value="Submit" class="btn btn-primary"> <a class="btn btn-link ml-2" href="index.php">Kembali</a></td></tr><br>
	</form>
	</div>
</body>
</html>