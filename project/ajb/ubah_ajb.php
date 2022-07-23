<?php 
include"../koneksi.php";
   $id=$_POST['Id_Nasabah'];
   $nik=$_POST['nik'];
   $nama=$_POST['nama'];
   $tempat=$_POST['tempat'];
   $tgl_lahir=$_POST['tanggal_lahir'];
   $jenis_kel=$_POST['jenis_kel'];
   $agama=$_POST['agama'];
   $alamat=$_POST['alamat'];
   $pekerjaan=$_POST['pekerjaan'];
   $no_hp=$_POST['no_hp'];
   $ubah=mysqli_query($koneksi,"UPDATE  data_ajb SET 
   nik = '$nik',
   nama = '$nama',
   tpt = '$tempat',
   tgl_lahir = '$tgl_lahir',
   jenis_kel = '$jenis_kel',
   agama = '$agama',
   alamat = '$alamat',
   pekerjaan = '$pekerjaan',
   no_hp = '$no_hp'
   WHERE Id_Nasabah = '$id'");
   if($ubah){
    echo"<script>
    alert('data berhasil diubah');
    window.location='data_ajb.php'
        </script>";
   }else{
	   echo"<script>
         alert('data gagal diubah');
         window.location='data_ajb.php'
        </script>";
   
   }

?>
