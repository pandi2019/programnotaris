<?php
include"../koneksi.php";

echo"
    <style>
    table{
     width: 100%;
     background: white;
     font-family:sans-serif;
    }
    th{
     color: white;
     padding: 10px;
     background: #1A1A1A;
    }
    td{
     padding: 10px;
    }
    tr:nth-child(even) td{
     background: #7F7F7F;
    }
    </style>
    
    <br>
    <table>
      <tr>
        <th>No</td>
        <th>Id Karyawan</td>
        <th>Nik</td>
        <th>Nama</td>
        <th>Tempat</td>
        <th>Tanggal lahir</td>
        <th>Agama</td>
        <th>alamat</td>
        <th>No Hp</th>
        <th colspan=2>aksi</td>
	 </tr>";
       
$nama='';
if(isset($_POST['nama'])){
	$nama=$_POST['nama'];
}elseif(isset($_GET['nama'])){
	$nama=$_GET['nama'];
}  
$sql=mysqli_query($koneksi,"SELECT * FROM data_karyawan WHERE nama='$nama'" ); 
$no=1;
while($data=mysqli_fetch_array($sql)){
	 
     echo"<tr>
           <td>".$no."</td>
           <td>".$data['id_karyawan']."</td>
           <td>".$data['nik']."</td>
           <td>".$data['nama']."</td>
           <td>".$data['tpt']."</td>
           <td>".$data['tgl_lahir']."</td>
           <td>".$data['agama']."</td>
           <td>".$data['alamat']."</td>
           <td>".$data['no_hp']."</td>
		   <td>
		   <a href='form_ubah_karyawan.php?id_karyawan=$data[id_karyawan]'><button>ubah</button></a>
		   <a href='hapus_karyawan.php?id_karyawan=$data[id_karyawan]'><button>Hapus</button></a>
		   </td></tr>";
		 $no++;
    }
    
    echo"</table>";
?>