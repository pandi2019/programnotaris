<html>
	<head><title>PENDAFTARAN</title>
		<style>
			body{margin:none;}
	.atas {width:100%;}
			.atas {
					height: 190px;
					background: #696969;
					border: 2px solid white;
				}
				
			.tengah{
			float: right;
			height: 620px;
			background: #B22222;
			width: 79.8%;
			}
			
			iframe{
			float: right;
			height: 620px;
			background: #B22222;
			width: 100%;
			}
			.kanan {
			float: left;
			height: 620px;
			width: 20%;
			background: #696969;
			}	
			div.box1
					{
						width: 200px;
						height: 200px;
						border:0px solid gray;
						position: absolute;
						font-size: 10px;
					}
					
					
			td{
				text-align: left;
				font-family: Leelawadee;
				
				}	
				
			td:hover{background:#B22222;}
			table.pilih{
			width: auto;
			height: 100%:
			font-size: 10px;
			background: #696969;
			}
			td.menu1{background: #696969;}
	</style>
	</head>
	<body onload='tutup(kotak1); tutup(kotak2); tutup(kotak3); tutup(kotak4);'>
	 <script>
		function buka(x)
		{
		 document.getElementById('kotak1').style.visibility = 'visible';
		}
		
		function tutup(x)
		{
		 x.style.visibility = 'hidden';
		}
		
		
		function buka_tutup(x)
		{
		 if(x.style.visibility == 'visible')
		 {
			x.style.visibility = 'hidden';
		 }
		 else
		 {
			x.style.visibility = 'visible';
		 }
		 
		 
		 
		}
	 </script>
	 <center>
	  <div class=atas><br><img src="logonotaris.png" align="left" width="160px" height="160px">
	  <tr><td align=center><b><font size="10" color="white" face="Leelawadee">NOTARIS KAB. KARAWANG</font></b></td></tr>
	  <tr>
	  <br><td align=center><font size="7" color="white" face="Leelawadee">Sisca Angelia Wulan Sari, SH., M.Kn.</font></td></br>
	  </tr>
	  <tr>
	  <td align=center><font size="5" color="black" face="Leelawadee">Jln. Raya Galuh Mas Sukaharja Kec. Telukjambe Kabupaten Karawang, Jawa Barat 41361</font></td>
	  </tr>
	  </div>
	  </center>
	  <div class=tengah>
		  <iframe name=isi>
		  
		  </iframe>
	  </form>
	  </div>
	 		
	<div class=kanan>
		<center>
		<table class=pilihan>
					<tr>
						<td>
							<br><a onclick='buka_tutup(kotak3); tutup(kotak1); tutup(kotak2); tutup(kotak4);'><font size="6" color="white" face="Leelawadee">KARYAWAN</font></a></br>
							<div class=box1 id=kotak3>
								<table class=pilih>
									<br><tr><td><a href="Karyawan/data_karyawan.php" target=isi><font color="white" size="4">> Data Karyawan</font></a></td></tr></br>
								</table>
								
						</td>
					</tr>
					<tr>
						<td>
							<br><a onclick='buka_tutup(kotak1); tutup(kotak2); tutup(kotak3); tutup(kotak4);'><font size="6" color="white" face="Leelawadee">DAFTAR BERKAS</font></a></br>
							<div class=box1 id=kotak1>
								<table class=pilih>
									<br><tr><td><a href="ajb/form_ajb.php" target=isi><font color="white" size="4">> Ajb</font></a></td></tr>
									<tr><td><a href="data_roya.php"><font color="white" size="4">> Roya</font></a></td></tr>
									<tr><td><a href="data_ph.php"><font color="white" size="4">> Peningkatan Hak</font></a></td></tr></br>
								</table>	
					<tr>
						<td>
							<br><a onclick='buka_tutup(kotak2); tutup(kotak1); tutup(kotak3); tutup(kotak4);'><font size="6" color="white" face="Leelawadee">INFORMASI</font></a></br>
							<div class=box1 id=kotak2>
								<table class=pilih>
									<br><tr><td class=menu1><a href="informasi/lihatajb/data_ajb.php" target=isi><font color="white" size="4">> Ajb</font></td></tr>
									<tr><td class=menu1><font color="white" size="4">> Roya</font></td></tr>
									<tr><td class=menu1><font color="white" size="4">> Peningkatan Hak</font></td></tr></br>
								</table>
					<tr>
						<td>
							<br><a onclick='buka_tutup(kotak4); tutup(kotak1); tutup(kotak2); tutup(kotak3);'><font size="6" color="white" face="Leelawadee">TRANSAKSI</font></a></br>
							<div class=box1 id=kotak4>
								<table class=pilih>
									<br><tr><td><a href="transaksi_ajb.php" target=isi><font color="white" size="4">> Ajb</font></a></td></tr>
									<tr><td><a href="transaksi_roya.php" target=isi><font color="white" size="4">> Roya</font></a></td></tr>
									<tr><td><a href="transaksi_phak.php" target=isi><font color="white" size="4">> Peningkatan Hak</font></a></td></tr></br>
								</table>
	</center>
	</div>
	</body>
</html>
