<?php

?>
<html>
	<head><title>PENDAFTARAN</title>
	</head>
	<body>
	  <div class=tengah>
	  <form action="data_ajb.php" method="post">	 
		<center>
		<table border=0 height=550>
			<tr><td colspan=2 align=center><u><font size="6" color="white">DATA TRANSAKSI AJB</font></u></td></tr>
			<tr>
				<td><font color="white">Id Nasabah</font></td> 
				<td><font color="white">:</font> <input type="text" size=14 maxlength=14 name="Id_Nasabah" readonly/></td>
			</tr>
			<tr>
				<td><font color="white">Nama</font></td> 
				<td><font color="white">:</font> <input type="text" size=25 name="nama"/></td></tr>
			
			<tr>
				<td colspan=2  align=center><button type="submit" value="tampil">TAMPILKAN DATA NASABAH</button>
				<button type="reset" value="batal">BATAL</button>
				</td>
			</tr>
		</table>
		</center>
	  </form>
	  </div>
	 		
	</body>
</html>
