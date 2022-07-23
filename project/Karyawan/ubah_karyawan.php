<?php 
include"../koneksi.php";
   $id=$_POST['id'];
   $nik=$_POST['nik'];
   $nama=$_POST['nama'];
   $tempat=$_POST['tempat'];
   $tgl_lahir=$_POST['tanggal_lahir'];
   $alamat=$_POST['alamat'];
   $agama=$_POST['agama'];
   $no_hp=$_POST['no_hp'];
   $ubah=mysqli_query($koneksi,"UPDATE  data_karyawan SET 
   nik = '$nik',
   nama = '$nama',
   tpt = '$tempat',
   tgl_lahir = '$tgl_lahir',
   alamat = '$alamat',
   agama = '$agama',
   no_hp = '$no_hp'
   WHERE id_karyawan = '$id'");
   if($ubah){
    echo"<script>
    alert('data berhasil diubah');
    window.location='data_karyawan.php'
        </script>";
   }else{
	   echo"<script>
         alert('data gagal diubah');
         window.location='data_karyawan.php'
        </script>";
   
   }

?>
