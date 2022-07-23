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
      <a href='form_roya.php'><button>Tambah</button></a>
	<center>
	<h1><u><font color=white>DATA NASABAH ROYA</font></u></h>  
	<br>
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
       
  
 
$sql=mysqli_query($koneksi,"SELECT * FROM data_roya"); 
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
		   <a href='form_ubah_roya.php?id_nasabah=$data[id_nasabah]'><button>Ubah</button></a>
		   <a href='hapus_roya.php?id_nasabah=$data[id_nasabah]'><button>Hapus</button></a>
		   </td></tr>";
		 $no++;
    }
    
    echo"</table>";
?>
<form action="cari.php" method="post">
	<label><font color="white" size="3">Cari :</font></label>
	<input type="text" name="nama">
	<td colspan=2  align=center><button type="submit" value="tampil">Cari</button>
</form>
