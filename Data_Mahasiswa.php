<!DOCTYPE html>
<html>
<head>
	<title>SISKA UBG</title>
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
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_mahasiswa.php">Data Mahasiswa</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="data_nilai.php">Data Nilai</a>
      </li>
    </form>
  </div>
</nav>
	<div class="container">
	<div class="jumbotron"></div>
	<h4 style="text-align:center; ">DAFTAR MAHASISWA</h4>
	<div class="table-responsive">
	<a href="tambah_mahasiswa.php" style="float:left;" class="btn btn-primary"> tambah mahasiswa </a>
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Nim Mahasiswa</th>
				<th>Nama Mahasiswa</th>
				<th>Semster Mahasiswa</th>
				<th>Jurusan</th>
				<th>Alamat</th>
				<th>No. hp</th>
				<th>E-mail</th>
				<th>Jenis Kelamin</th>
				<th>Status Mahasiswa</th>
		
			</tr>
			</thead>
			<?php
			include "koneksi.php";
			$tampil ="SELECT * FROM tb_mhs";
			$mhs = mysqli_query($koneksi, $tampil);
			$no = 1;
			foreach ($mhs as $mahasiswa) {
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $mahasiswa ['nim_mahasiswa']; ?></td>
				<td><?php echo $mahasiswa ['nama_mahasiswa']; ?></td>
				<td><?php echo $mahasiswa ['semester']; ?></td>
				<td><?php echo $mahasiswa ['jurusan']; ?></td>
				<td><?php echo $mahasiswa ['alamat']; ?></td>
				<td><?php echo $mahasiswa ['no_hp']; ?></td>
				<td><?php echo $mahasiswa ['email']; ?></td>
				<td><?php echo $mahasiswa ['jenis_kelamin']; ?></td>
				<td><?php echo $mahasiswa ['status_mahasiswa']; ?></td>
				<td>
					<a href ="hapus_mhs.php?nim=<?php echo $mahasiswa['nim_mahasiswa'];?>" type="button" class="btn btn-danger btn-sm">Hapus</a>
					<a href="ubah_mhs.php?nim=<?php echo $mahasiswa ['nim_mahasiswa']; ?>" type="button" class="btn btn-warning btn-sm">Ubah</a>
			</tr>
			<?php
			$no++;			
			}
			?>
		</tbody>
	</table>

</div>
</body>
</html>