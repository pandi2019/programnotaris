<?php
include"../koneksi.php";
$id=$_GET['id_nasabah'];
$hapus=mysqli_query($koneksi,"DELETE FROM data_ph WHERE id_nasabah='$id'");
if($hapus)
{
  echo"<script>
    alert('data berhasil dihapus');
    window.location='data_ph.php'
       </script>";
}
?>
