<?php
include"../koneksi.php";
$id=$_GET['id_karyawan'];
$hapus=mysqli_query($koneksi,"DELETE FROM data_karyawan WHERE id_karyawan='$id'");
if($hapus)
{
  echo"<script>
    alert('data berhasil dihapus');
    window.location='data_karyawan.php'
       </script>";
}
?>
