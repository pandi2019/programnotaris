<?php
include"../koneksi.php";
   $id=$_POST['id'];
   $nik=$_POST['nik'];
   $nama=$_POST['nama'];
   $tempat=$_POST['tempat'];
   $tgl_lahir=$_POST['tanggal_lahir'];
   $agama=$_POST['agama'];
   $alamat=$_POST['alamat'];
   $no_hp=$_POST['no_hp'];
   $simpan=mysqli_query($koneksi,"INSERT INTO data_karyawan values('$id','$nik','$nama','$tempat','$tgl_lahir','$agama','$alamat','$no_hp')");
   if($simpan){
    echo"<script>
    alert('data berhasil disimpan');
    window.location='data_karyawan.php';
        </script>";
    }else{
	echo"<script>
	alert('gagal simpan');
	    </script>";
	}
?>
