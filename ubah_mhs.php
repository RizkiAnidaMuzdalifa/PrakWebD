<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SISKA-UBG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_mahasiswa.html">Data Mahasiswa</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="data_nilai.html">Data Nilai</a>
      </li>
    </form>
  </div>
</nav>
	<div class="container">
    <h3 style="text-align: center;"> Form Tambah mahasiswa</h3>
      <div class="col-sm-6">
        <?php
        include "koneksi.php";
        //menampilkan data tertentu dari sql dalam bentuk objek
        $sql = $koneksi->query("SELECT * FROM tb_mhs WHERE nim_mahasiswa=".$_GET['nim']);
        //konversi data yang terdapat di dalam variabel $sql menjadi bentuk array
        $s = mysqli_fetch_array($sql);
        // var_dump($s)
        ?>
        <form action="proses_ubah.php" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <label>Nim Mahasiswa</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nim_mahasiswa" class="form-control" maxlength="10" value="<?php echo $s['nim_mahasiswa']?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Nama Mahasiswa</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nama_mahasiswa" class="form-control" value="<?php echo $s['nama_mahasiswa']?>">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Jurusan</label>
            </div>

            <div class="col-sm-6">
              <select name="jurusan" class="form-control">
                <option>--Pilih Jurusan--</option>
                <option value="S1 ILKOM" <?php echo $s['jurusan'] == 'S1 ILKOM'?
                'selected="selected"':'' ?>>S1 ILKOM</option>
                <option value="S1 DKV" <?php echo $s['jurusan'] == 'S1 DKV'?
                'selected="selected"':'' ?>>S1 DKV</option>
                <option value="D3 MI" <?php echo $s['jurusan'] == 'D3 MI'?
                'selected="selected"':'' ?>>D3 MI</option>
                <option value="D3 RPL" <?php echo $s['jurusan'] == 'D3 RPL'?
                'selected="selected"':'' ?>>D3 RPL</option>
              </select>
            </div>
          </div>

           <div class="row">
            <div class="col-sm-6">
              <label>Semester</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="semester" class="form-control" value="<?php echo $s['semester']?>">
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Alamat</label>
            </div>
            <div class="col-sm-6">
              <textarea name="alamat" class="form-control" value=""><?php echo $s['alamat']?></textarea>
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Nomor Hp</label>
            </div>
            <div class="col-sm-6">
              <input type="number" name="no_hp" class="form-control" maxlength="13" value="<?php echo $s['no_hp']?>">
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Email</label>
            </div>
            <div class="col-sm-6">
              <input type="Email" name="email" class="form-control" value="<?php echo $s['email']?>">
            </div>
          </div>

             <div class="row">
            <div class="col-sm-6">
              <label>Jenis Kelamin</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" name="jenis_kelamin" value= "Laki_Laki" <?php echo $s['jenis_kelamin'] == 'Laki-Laki'?'checked':'' ?>> Laki-Laki
               <input type="radio" name="jenis_kelamin" value= "Perempuan" <?php echo $s['jenis_kelamin'] == 'Perempuan'?'checked':'' ?>>Perempuan
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Status Mahasiswa</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" name="status" value= "Aktif" <?php echo $s['status_mahasiswa'] == 'Aktif'?'checked':'' ?>> Aktif
               <input type="radio" name="status" value= "Tidak Aktif" <?php echo $s['status_mahasiswa'] == 'Tidak Aktif'?'checked':'' ?>>Tidak Aktif
            </div>
          </div>

    <div class="row">
      <div class="col-sm-6">
     <button type="submit" class="btn btn-primary btn-block">Ubah Data Mahasiswa</button>
            
          </div>
        </div>
    </form>
      </div>
    
</div>
</body>
</html>