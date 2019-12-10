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
        <form action="proses.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-6">
              <label>Nim Mahasiswa</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nim_mahasiswa" class="form-control" maxlength="10">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Nama Mahasiswa</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nama_mahasiswa" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Jurusan</label>
            </div>

            <div class="col-sm-6">
              <select name="jurusan" class="form-control">
                <option>--Pilih Jurusan--</option>
                <option value="S1 ILKOM">S1 ILKOM</option>
                <option value="S1 DKV">S1 DKV</option>
                <option value="D3 MI">D3 MI</option>
                <option value="D3 RPL">D3 RPL</option>
              </select>
            </div>
          </div>

           <div class="row">
            <div class="col-sm-6">
              <label>Semester</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="semester" class="form-control">
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Alamat</label>
            </div>
            <div class="col-sm-6">
              <textarea name="alamat" class="form-control"></textarea>
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Nomor Hp</label>
            </div>
            <div class="col-sm-6">
              <input type="number" name="no_hp" class="form-control" maxlength="13">
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Email</label>
            </div>
            <div class="col-sm-6">
              <input type="Email" name="email" class="form-control">
            </div>
          </div>

             <div class="row">
            <div class="col-sm-6">
              <label>Jenis Kelamin</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" name="jenis_kelamin" value= "Laki-Laki"> Laki-Laki
               <input type="radio" name="jenis_kelamin" value= "Perempuan"> Perempuan
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Status Mahasiswa</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" name="status_mahasiswa" value= "Aktif"> Aktif
               <input type="radio" name="status_mahasiswa" value= "Tidak Aktif"> Tidak Aktif
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Foto</label>
            </div>
            <div class="col-sm-6">
              <input type="file" name="foto" class="form-control">
            </div>
          </div>

    <div class="row">
      <div class="col-sm-6">
     <button type="submit" class="btn btn-primary btn-block">Tambah Mahasiswa</button>
            
          </div>
        </div>
    </form>
      </div>
    
</div>
</body>
</html>