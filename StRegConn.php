<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db('test',$con);


$stname=$_POST["sname"];
$stuname=$_POST["suname"];
$stpass=$_POST["spwd"];
$stphno=$_POST["sphone"];
$stemail=$_POST["semail"];
$stloc=$_POST["sloc"];

$stl="Insert into storekeeper values ('$stname','$stuname',
'$stpass',$stphno,'$stemail','$stloc')";
$save=mysql_query($stl,$con);

if($save)
{
	echo "Registered  SUCCESSFULLY !";
	?>
	<form  action="StReg.php" method="POST">
	<input type="submit" name="submit" value="Back"><br><br>
	</form>
	<?php
	}	
else
{
	echo "Failed ! try agian";
}
?>
