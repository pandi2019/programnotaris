<?php 
include"../koneksi.php";
   $id=$_POST['id_nasabah'];
   $nik=$_POST['nik'];
   $nama=$_POST['nama'];
   $tempat=$_POST['tempat'];
   $tgl_lahir=$_POST['tanggal_lahir'];
   $jenis_kel=$_POST['jenis_kel'];
   $agama=$_POST['agama'];
   $alamat=$_POST['alamat'];
   $pekerjaan=$_POST['pekerjaan'];
   $no_hp=$_POST['no_hp'];
   $ubah=mysqli_query($koneksi,"UPDATE  data_ph SET 
   nik = '$nik',
   nama = '$nama',
   tpt = '$tempat',
   tgl_lahir = '$tgl_lahir',
   jenis_kel = '$jenis_kel',
   agama = '$agama',
   alamat = '$alamat',
   pekerjaan = '$pekerjaan',
   no_hp = '$no_hp'
   WHERE id_nasabah = '$id'");
   if($ubah){
    echo"<script>
    alert('data berhasil diubah');
    window.location='data_ph.php'
        </script>";
   }else{
	   echo"<script>
         alert('data gagal diubah');
         window.location='data_ph.php'
        </script>";
   
   }

?>
