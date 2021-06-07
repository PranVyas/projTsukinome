
<html>
<head><title>T Hire</title>
<style>

</style></head>

<body bgcolor="orange">
			
<CENTER>
<h1>H.A.B G-BIKE</h1>
<h2>R I D E    T H E   C A P I T A L</h2>
<hr color="GREEN">
</CENTER>

<a href="Ghome.php">HOME</a>
<a href="TLogin.php">Login</a>
<a href="TAbout.php">About Us</a>
<hr color="RED">

<h3 align ="CENTER" >H I R E  &emsp;&emsp; H E R E</h3>
<br>
	<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db('test',$con);

			$cyc=mysql_query("Select * from cycstat");
			$cyc_fech=mysql_fetch_array($cyc);
			
			
			$add1=$cyc_fech["No_cycle"] + 1;
						
				$sql="UPDATE `cycstat` SET `No_cycle`='$add1'";
				$result=mysql_query($sql,$con);

				if($result)
					{
						echo "Returned SUCCESSFULLY !";
					}	
				else
					{
					echo "Failed !";
					}
				
			
	  ?>
	  
</form>
</body>
</html>