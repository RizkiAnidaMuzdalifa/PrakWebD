<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM tb_mhs WHERE nim_mahasiswa=".$_GET['nim']);
?>

<script>
	document.location = 'Data_Mahasiswa.php'
</script>
