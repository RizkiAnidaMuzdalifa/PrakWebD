<?php
  $koneksi = mysqli_connect("localhost","root","","db_pendaftaran");
  if (!$koneksi) {
  	echo " koneksi gagal : ".mysqli_connect_error;

  }
  ?>