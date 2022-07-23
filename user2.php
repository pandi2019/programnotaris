<html>
  <head>
     <title>user</title>
    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'/>
	 <style type=text/css rel=stylesheet>
             body{
		  font-family: sans;
	    }
	    b{
			  color: #101066;
			  
		  }	  
	   
		table{
		  padding: 10px;
		  font-size: 20;
		}
        input.text{
			 border: 1px solid #7F7F7F;
		    width: 280px;
		    color: #1A1A1A; 
		    height: 30px;	  
	        }
	    input.text:hover{
	  	    border: 1px solid blue;
		   
	      }
	     textarea:hover{
		   border: 1px solid blue;
		 }
		 td.text{
			 border-bottom: 2px solid white;
		 }
		 td.text:hover{
		   border-bottom: 2px solid blue;
		 }
		
	  button{
		  background: #B22222;
		  width: 100px;
		  height: 30px;
		  color: white;
		  font-size: 18px;
		  border: 1px solid black;
		  cursor: pointer;
	  }
	  button:hover{
		  background: white;
		  color:  #B22222;
		  border: 2px solid  #B22222;
		  } 
         a{
	        text-decoration: none;
	        color: #B22222 ;
	        float: left;
	        margin-left: 40px;
           }
           a:hover{
		     border-bottom: 1px solid #B22222;
		   }	  		  
         div.utama{
		    margin-top: 20px;
		    width: 800px;
		    border: 1px solid #B22222;
		  }
		  div.atas{
		    width: 800px;
		    background: #B22222;
		    font-family: sans;
		    color: white;
		  }
     </style>
  </head>
  <body>
	  <script type=text/javascript>
	    function validasi(){
			var nk=document.fpengguna.nik.value;
			var nm=document.fpengguna.nama.value;
			var jkl=document.fpengguna.jk.value;
			var almt=document.fpengguna.alamat.value;
			var user=document.fpengguna.user.value;
			var pas=document.fpengguna.pass.value;
			
			if(nk==''){
				alert('nik harus di isi');
				document.fpengguna.nik.focus();
				return false;
			}
			
			if(nm==''){
				alert('nama harus di isi');
				document.fpengguna.nama.focus();
				return false;
			}
			if(jkl==''){
				alert('jenis kelamin harus di pilih');
			
				return false;
			}
			
			if(almt==''){
				alert('alamat harus di isi');
				document.fpengguna.alamat.focus();
				return false;
			}
			
			if(user==''){
				alert('user harus di isi');
				document.fpengguna.user.focus();
				return false;
			}
			if(pas==''){
				alert('password harus di isi');
				document.fpengguna.pass.focus();
				return false;
			}
		}
	  </script>
	<center>
   <div class=utama>
	   <div class=atas>
	     <center>DAFTAR USER</center>
	   </div>		
     <form name=user method=post action=simpan_user2.php onsubmit='return validasi()'>
       <a href='index.php?idp'><i class="fa fa-arrow-left">kembali</i></a>
      <table>
		 <tr></tr> 
		
        <tr><td>Nik</td><td class=text><input type=text name=nik class=text></td></tr>
	    <tr><td>Nama</td><td class=text><input type=tetx name=nama size=10 class=text></td></tr>
        <tr><td>jenis kelamin</td><td class=text><input type=radio name=jk value=L >laki-laki<input type=radio name=jk value=P >perempuan</td></tr>
        <tr><td>Alamat</td><td class=text><textarea cols=38 rows=5 name=alamat></textarea></td></tr>
        <tr><td>Id pengguna</td><td class=text><input type=text name=user size=10 class=text></td></tr>
        <tr><td>Kata sandi</td><td class=text><input type=password name=pass size=10 class=text></td></tr>
        
       <tr><td colspan=2><center><button type=submit><i class="fa fa-floppy-o"></i> simpan</button></center></td></tr>

         
      </table>

    </form>
    </div>
    </center>
  </body>
</html>

