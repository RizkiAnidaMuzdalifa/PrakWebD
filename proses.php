<?php
include "koneksi.php";
//var_dump($_FILES);

$nim = $_POST['nim_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_mahasiswa = $_POST['status_mahasiswa'];
$namaFile = $_FILES['foto']['name'];
$dirTmp = $_FILES['foto']['tmp_name'];

$folder = "img/".$namaFile;

$upload = move_uploaded_file($dirTmp, $folder);

$simpan = "INSERT INTO tb_mhs(nim_mahasiswa,nama_mahasiswa,semester,jurusan,alamat,
no_hp,email,jenis_kelamin,status_mahasiswa,foto) 
values('$nim','$nama_mahasiswa','$semester','$jurusan','$alamat','$no_hp','$email','$jenis_kelamin','$status_mahasiswa','$folder')";

// if ($upload) {
// 	mysqli_query($koneksi, $simpan);
// 	echo "File berhasil di upload <br/>";
// 	echo "Link : <a href='".$folder.$namaFile."'>".$namaFile."</>";
// }else{
// 	echo "Gagal Upload";
// }


// // cek koneksiS
if ($upload) {
	mysqli_query($koneksi, $simpan) ;
    echo "<script language='javascript'>
    alert ('data berhasil di simpan');
    document.location ='Data_Mahasiswa.php'
    </script>";
}else{
    echo "lapor !! data tidak berhasil disimpan".mysqli_error($koneksi);
}