<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
<a href="data_mahasiswa.php" style="float:right; " class="btn btn-primary"> Data Mahasiswa </a>
<a href="tambah_mahasiswa.php" style="float:right ;" class="btn btn-primary"> Tambah Mahasiswa </a>
</body>
</html>
<?php
include "koneksi.php";

$nim = $_POST['nim_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email= $_POST['email'];
$jk = $_POST['jenis_kelamin'];
$status = $_POST['status'];

$simpan ="INSERT INTO tb_mhs (nim_mahasiswa,nama_mahasiswa,semester,jurusan,alamat,no_hp,email,jenis_kelamin,status_mahasiswa) VALUES
 ('$nim','$nama','$semester','$jurusan','$alamat','$no_hp','$email','$jk','$status')";

if (mysqli_query($koneksi,$simpan)) {
	echo "data berhasil disimpan";
	# code...
}else{
	echo "Eror lurrr" . mysqli_error($koneksi);

}
