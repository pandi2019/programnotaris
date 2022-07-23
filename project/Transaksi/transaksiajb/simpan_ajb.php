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
   $simpan=mysqli_query($koneksi,"INSERT INTO data_ajb values('$id','$nik','$nama','$tempat','$tgl_lahir','$jenis_kel','$agama','$alamat','$pekerjaan','$no_hp')");
   if($simpan){
    echo"<script>
    alert('data berhasil disimpan');
    window.location='data_ajb.php';
        </script>";
    }else{
	echo"<script>
	alert('gagal simpan');
	    </script>";
	}
?>
