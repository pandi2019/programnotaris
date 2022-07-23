<?php
   $nik = $_POST['nik'];
   $nama = $_POST['nama'];
   $jk = $_POST['jk'];
   $alamat = $_POST['alamat'];
   $user = $_POST['user'];
   $pass = $_POST['pass'];
;    
    $konek = mysqli_connect('localhost','root','','db_notaris');
    if(!$konek)
    {
		echo"koneksi gagal";
	}else{
		//validasi database
		$cek=mysqli_query($konek,"select * from user where nik='$nik'");
		$jml=mysqli_num_rows($cek);
		  if($jml==1)
		  {
			  echo"<script>
			    alert('data sudah ada'); 
			     window.location='user2.php';
			  </script>";
		  }else{
			  //simpan ke database
		       $simpan_by=mysqli_query($konek,"insert into user set
		                                   nama = '$nama',
		                                   jk ='$jk',
		                                   alamat = '$alamat',
		                                   user = '$user',
		                                   pass = '$pass',
		                                   nik='$nik'");//primary
									   
					
					if($simpan_by)
					{ 
						echo"<script>
						  alert('data tersimpan'); 
					     window.location='index.php';
					     </script>";
					 
		          }                         
	  }
  }
	?>

