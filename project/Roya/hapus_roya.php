<?php
include"../koneksi.php";
$id=$_GET['id_nasabah'];
$hapus=mysqli_query($koneksi,"DELETE FROM data_roya WHERE id_nasabah='$id'");
if($hapus)
{
  echo"<script>
    alert('data berhasil dihapus');
    window.location='data_roya.php'
       </script>";
}
?>
