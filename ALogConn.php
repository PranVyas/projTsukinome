<html>
<body>
<CENTER>
<h1>H.A.B G-BIKE</h1>
<h2>R I D E    T H E   C A P I T A L</h2>
<hr color="GREEN">
</CENTER>
<a href="Ghome.php">HOME</a>
 <a href="TLogin.php">Sign up</a>
 <a href="Ghome.php">About Us</a>
<hr color="red">
<?php
 $con=mysql_connect("localhost","root","");
 $db=mysql_select_db('test',$con);

 $ausname=$_POST["Auname"];
 $apass=$_POST["Apwd"];


 $sel=mysql_query("Select * from admin");

	while($fech=mysql_fetch_array($sel))
	{		if(($fech["AUsername"]=="$ausname") && ($fech["APassword"]=="$apass"))
		{
			echo "Logged In Successfully!<br><br>";
			

			
			    echo "<table border=2>"; 
				echo "<tr>";
				echo "<td>";
				echo "Location";
				echo "</td>";
				echo "<td>";
				echo "StName";
				echo "</td>";
				echo "<td>";
				echo "StUsername";
				echo "</td>";
				echo "<td>";
				echo "StPassword";
				echo "</td>";
				echo "<td>";
				
			/*	$cyc=mysql_query("Select * from cycstat");
			    $cyc_fech=mysql_fetch_array($cyc);
				
				$sql="select No_Cycle from `cycstat`";
				$result=mysql_query($sql,$con);
				
				if($result)
				{
				echo "No Cycles Available";
				echo "</td>";
				echo "</tr>";
				}*/
			$strkpr=mysql_query("Select * from StoreKeeper");
		
			while($khech=mysql_fetch_array($strkpr))
			{
				
				echo "<tr>";
				echo "<td>";
				echo "$khech[Location]";
				echo "</td>";
				echo "<td>";
				echo "$khech[StName]";
				echo "</td>";
				echo "<td>";
				echo "$khech[StUsername]";
				echo "</td>";
				echo "<td>";
				echo "$khech[StPassword]";
				echo "</td>";
				echo "<td>";
				//echo "$cyc_fech[No_cycle]";
				echo "</td>";
				echo "</tr>";
				
			}
			echo "</table><br><br>";
?>
		<form  action="StReg.php" method="POST">
		To Register/add a new Storekeeper press below Button <br> 
		<button type="submit" name="sreg" value="insert">Register</button>&emsp;	<?php
		}
		else
		{
			echo "Try again ! Wrong Password or Username ";
		}
	}	
?>
</body>
</html>