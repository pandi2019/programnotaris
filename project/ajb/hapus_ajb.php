<?php
include"../koneksi.php";
$id=$_GET['Id_Nasabah'];
$hapus=mysqli_query($koneksi,"DELETE FROM data_ajb WHERE Id_Nasabah='$id'");
if($hapus)
{
  echo"<script>
    alert('data berhasil dihapus');
    window.location='data_ajb.php'
       </script>";
}
?>
