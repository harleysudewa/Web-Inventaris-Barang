<?php
include 'koneksi.php';
$id_id20338071_khordell       = $_GET['id'];
$id20338071_khordell = mysqli_query($koneksi, "select * from tugas4 where id='$id_id20338071_khordell'");
$row        = mysqli_fetch_array($id20338071_khordell);
// membuat data jurusan menjadi dinamis dalam bentuk array
$kondisi_barang    = array('Baik','Cacat','Rusak');
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset= "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Inventaris Barang - Edit Barang</title>
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
        <a class="nav-link" href="welcome.php">Home</a>
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
        <div class="container">
        <form method="post" action="update.php">
            <h2>Edit Data Barang</h2>
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
            <label for="tanggal_barang">Tanggal Masuk Barang :</label><br>
            <input type="date" value="<?php echo $row['tanggal_barang'];?>" name="tanggal_barang"><br><br>
            
            <label for="nama_barang">Nama Barang :</label><br>
            <input type="text" value="<?php echo $row['nama_barang'];?>" name="nama_barang"><br><br>
            
            <label for="jenis_barang">Jenis Barang :</label><br>
            <input type="radio" name="jenis_barang" value="U" <?php echo active_radio_button("U", $row['jenis_barang'])?>>Umum<br>
            <input type="radio" name="jenis_barang" value="E" <?php echo active_radio_button("E", $row['jenis_barang'])?>>Elektronik<br>
            <input type="radio" name="jenis_barang" value="I" <?php echo active_radio_button("I", $row['jenis_barang'])?>>Perlengkapan Ibadah<br><br>
            
            <label for="jumlah_ barang">Jumlah (pcs) :</label><br>
            <input type="number" value="<?php echo $row['jumlah_barang'];?>" id="jumlah_barang" name="jumlah_barang"><br><br>
            
            <label for="kondisi_barang">Kondisi :</label><br>
            <select name="kondisi_barang">
                <?php
                foreach ($kondisi_barang as $j){
                    echo "<option value='$j' ";
                    echo $row['kondisi_barang']==$j?'selected="selected"':'';
                    echo ">$j</option>";
                }
                ?>
            </select><br><br>
		
		<label for="penanggung_jawab">Penanggung Jawab :</label><br>
        <input type="text" value="<?php echo $row['penanggung_jawab'];?>" name="penanggung_jawab"><br><br>

		<button type="submit" value="simpan" class="btn btn-primary">Simpan Perubahan</button>
		<a class="btn btn-link ml-2" href="index.php">Kembali</a><br>
            </table>
        </form>
        </div>
    </body>
</html>