<html>

<head><title>T To Hire</title>
<style>

</style></head>

<body bgcolor="orange">
			
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

$usname=$_POST["uname"];
$pass=$_POST["pwd"];

$login=0;

$sel=mysql_query("Select * from testdetails");

	while($fech=mysql_fetch_array($sel))
	{
		if(($fech["Username"]=="$usname") && ($fech["Password"]=="$pass"))
		{
			echo "Logged In Successfully!<br><br>";?>
			<a href="THire.php">Hire</a><br><br> <?php
				$login=0;
				echo $fech["Username"];
				$name=$fech["Username"];	
	    }
	}
		
		
?>

</body>
</html>