<html><body>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db('test',$con);

$Pick=$_POST["pick"];
$Dropl=$_POST["dropl"];

$test=0;

if(($Pick=="GH1" || $Pick=="GH2" || $Pick=="GH3" || $Pick=="GH4" || $Pick=="GH5" || $Pick=="GH6" || $Pick=="CH1" || $Pick=="CH2" || $Pick=="CH3" || $Pick=="CH4" || $Pick=="CH5" || $Pick=="CH6" ) 
	&& ($Dropl=="GH1" || $Dropl=="GH2" || $Dropl=="GH3" || $Dropl=="GH4" || $Dropl=="GH5" || $Dropl=="GH6" || $Dropl=="CH1" || $Dropl=="CH2" || $Dropl=="CH3" || $Dropl=="CH4" || $Dropl=="CH5" || $Dropl=="CH6"))
	{
	  $test=1;
	
	if  ($test==1)
	{
		$sql="UPDATE `trans` SET `PickUp`='$Pick',`DropL`='$Dropl',STATUS='0' WHERE STATUS='1'";
		$result=mysql_query($sql,$con);

	  if($result)
		{
			ECHO "HIRED SUCCESSFULLY !<br><br>
	   		Please remember to press Return link ....When you return the Cycle at your destination /drop location. <br><br>";	 		
		
$cyc=mysql_query("Select * from cycstat");

			$cyc_fech=mysql_fetch_array($cyc);
			
			$add1=$cyc_fech["No_cycle"] - 1;
			echo "<br><br>";
			If($add1>=0)
			{
				$sql="UPDATE `cycstat` SET `No_cycle`='$add1'";
				$result=mysql_query($sql,$con);

				if($result)
					{
						echo "No. of Cycle Updated SUCCESSFULLY !";
					}	
			}
			 Else
				{ 
					echo " NO Cycle Available to Provide : PLease visit again later";
					exit;
				}
?>
			?><form action="TReturn.php" method="POST"> 
<button type="submit" name="hire" value="Search">Return</button><?php
		}
		
	  else
		{
			echo "Failed !";
		}
	}	
}
 
else
{
    echo " Please! Enter Only  Valid Locations Given In the List";
} 	
?>

</body>
</html>