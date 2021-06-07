<?php
$con=mysql_connect("localhost","root","");
if($con)
{
	echo " Connected<br>";
}
else
{
	echo "Connection Failed";
}
$db=mysql_select_db('test',$con);

if($db)
{
	echo "Database FOUND !<br>";
}
else
{
	echo" Database NOT Found !";
}

$frname=$_POST["fname"];
$laname=$_POST["lname"];
$usname=$_POST["uname"];
$pass=$_POST["pwd"];
$emailid=$_POST["email"];
$phno=$_POST["phone"];
$gender=$_POST["sex"];


$sql="Insert into testdetails values ('$frname','$laname','$usname','$pass','$emailid',$phno,'$gender')";
$result=mysql_query($sql,$con);

if($result)
{
	echo "Registered  SUCCESSFULLY !";
}	
else
{
	echo "Failed ! try agian";
}
?>
