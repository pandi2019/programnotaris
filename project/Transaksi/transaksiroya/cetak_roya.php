<html>
  <head>
    <title></title>
    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'/>
    <style type=text/css rel=stylesheet>
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
   
  </head>
  <body>
<?php
  include "koneksi.php";
	$no=1;
	$nama=$_POST['nama'];
	$sql=mysqli_query($koneksi,"SELECT * FROM data_ajb WHERE nama='$nama'");
	 while($data = mysqli_fetch_array($sql)){
	//echo $nama;


echo"
	<center>
    <div class=utama>
		<h4>Transaksi Ajb</h4>
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
	 </tr>
	
	
	 
			<tr>
           <td>".$no."</td>
           <td>".$data['Id_Nasabah']."</td>
           <td>".$data['nik']."</td>
           <td>".$data['nama']."</td>
           <td>".$data['tpt']."</td>
           <td>".$data['tgl_lahir']."</td>
		   <td>".$data['jenis_kel']."</td>
           <td>".$data['agama']."</td>
           <td>".$data['alamat']."</td>
		   <td>".$data['pekerjaan']."</td>
           <td>".$data['no_hp']."</td>
	 </table>}
   <script>
		window.print();
	</script>
    </div> 
    </div>"
	 
  ?>

        </table>
    </center>
  </body>
  
</html>