<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_nasabah            		= $_POST['id_nasabah'];
$nik            			= $_POST['nik'];
$nama           			= $_POST['nama'];
$tempat                     = $_POST['tempat'];
$tanggal_lahir              = $_POST['tanggal_lahir'];
$jenis_kelamin  			= $_POST['jenis_kelamin'];
$agama        				= $_POST['agama'];
$alamat         			= $_POST['alamat'];
$pekerjaan         			= $_POST['pekerjaan'];
$no_hp						= $_POST['no_hp'];
// query SQL untuk insert data
$query="INSERT INTO data_ajb SET nik='$nik',nama='$nama',tempat_tanggal_lahir='$tempat_tanggal_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat',pekerjaan";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>
