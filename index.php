<html>
 <head>
   <title>Log in</title>
    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'/>
   <style type=text/css rel=styleheet>
   div.utama{
     width: 250px;
     height: 330px;
     border: 2px solid #B22222;
     margin-top: 15%;
   }
   div.atas{
      width: 250px;
      background: #B22222;
      height: 30px;
   }
   div.tengah{
   margin-top: 20px;
   }
   input{
	 float: right;
     width: 170px;
     height: 40px;
     border: 1px solid gray;
   }
   button{
	   width: 215px;
	   height: 30px;
	   border: 1px solid #B22222;
	   background: #B22222;
	   color: white;
   }
   b{
	   float: left;
	   color: white;
	   margin-top: 6px;
	   margin-left: 20px;
   }
   i{
	   margin-top: 13px;
	   color: white;
	   font-size: 50;
	   background: #B22222;
   }
   td.i{
	    color: #140D81;
	    background: #B22222;
   }
   </style>
 </head>
 <body>
 <center>
   <div class=utama>
     <img src="logonotaris.png" align="center" width="100px" height="100px">
	 <div class=atas>  
		 <b>MASUK KE PROGRAM</b> 
     </div>
     <div class=tengah>
       <form method=post action=templet.html>
        <table>
		<tr colspan=2><td></td></tr>
          <tr>
           <td class=i>&spades;<i class="fa fa-user"></i>&spades;.
            <input type=text name=id size=15 placeholder='Id Pengguna'></td>
          </tr>
          <tr>
            <td class=i>&spades;<i class="fa fa-key"></i>&spades;<input type=password name=pass size=15 placeholder="kata sandi"></td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <td colspan=2><button type=submit > Masuk</button></td>
          </tr>
          <tr>
            <td colspan=2><a href='user2.php'><button type=button > Daftar</button></a></td>
          </tr>
        
        </table>
       </form>
     </div>
     <div class=bawah>
     
     </div>
   </div>
  </center> 
 </body>
</html>
