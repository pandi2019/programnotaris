<?php

?>
<html>
	<head><title>PENDAFTARAN</title>
	</head>
	<body>
	  <div class=tengah>
	  <form action="simpan_karyawan.php" method="post">	 
		<center>
		<table border=0 height=550>
			<tr><td colspan=2 align=center><u><font size="6" color="white">INPUT DATA KARYAWAN</font></u></td></tr>
			<tr>
				<td><font color="white">Id Karyawan</font></td> 
				<td><font color="white">:</font> <input type="text" size=14 maxlength=14 name="id"/></td>
			</tr>
			
			<tr>
				<td><font color="white">NIK</font></td> 
				<td><font color="white">:</font> <input type="text" size=14 maxlength=14 name="nik"/></td>
			</tr>
			<tr>
				<td><font color="white">Nama</font></td> 
				<td><font color="white">:</font> <input type="text" size=25 name="nama"/></td></tr>
			<tr>
				<td><font color="white">Tempat</font></td> 
				<td><font color="white">:</font> <input type="text" size=25 name="tempat"/></td></tr>
			<tr>
			<tr>
				<td><font color="white">Tanggal Lahir</font></td> 
				<td><font color="white">:</font> <input type="date" size=25 name="tanggal_lahir"/></td></tr>
			<tr>
				<td><font color="white">Agama</font></td> 
				<td><font color="white">:</font>
				<select name="agama">
					<option value="islam">Islam</option>
					<option value="kristen">Kristen</option>
					<option value="hindu">Hindu</option>
					<option value="budha">Budha</option>
				</select>
				</td></tr>
			<tr>
				<td><font color="white">Alamat</font></td> 
				<td><font color="white">:</font> <textarea size=25 name="alamat"></textarea></td></tr>
			<tr>
				<td><font color="white">No Hp</font></td> 
				<td><font color="white">:</font> <input type="text" size=25 name="no_hp"/></td></tr>
			<tr>
				<td colspan=2  align=center><button type="submit" value="simpan">SIMPAN</button>
				<button type="reset" value="batal">BATAL</button>
				</td>
			</tr>
		</table>
		</center>
	  </form>
	  </div>
	 		
	</body>
</html>
