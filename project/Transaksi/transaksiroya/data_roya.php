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
        <th>Id Nasabah</td>
        <th>Nik</td>
        <th>Nama</td>
        <th>Tempat</td>
        <th>Tanggal lahir</td>
		<th>Jenis Kelamin</td>
        <th>Agama</td>
        <th>alamat</td>
		<th>Pekerjaan</td>
        <th>No Hp</th>
        <th colspan=2>aksi</td>
	 </tr>";
       
$nama='';
if(isset($_POST['nama'])){
	$nama=$_POST['nama'];
}elseif(isset($_GET['nama'])){
	$nama=$_GET['nama'];
}  
$sql=mysqli_query($koneksi,"SELECT * FROM data_roya WHERE nama='$nama'" ); 
$no=1;
while($data=mysqli_fetch_array($sql)){
	 
     echo"<tr>
           <td>".$no."</td>
           <td>".$data['id_nasabah']."</td>
           <td>".$data['nik']."</td>
           <td>".$data['nama']."</td>
           <td>".$data['tpt']."</td>
           <td>".$data['tgl_lahir']."</td>
		   <td>".$data['jenis_kel']."</td>
           <td>".$data['agama']."</td>
           <td>".$data['alamat']."</td>
		   <td>".$data['pekerjaan']."</td>
           <td>".$data['no_hp']."</td>
		   <td>
		   <a href='print.php?nama=".$data['nama']."'><button>Cetak</button></a>
		   </td></tr>";
		 
    }
    
    echo"</table>";
?>
