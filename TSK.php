<html>
<head><title>G Form</title></head>

<body>

<a href="TAbout.php">G-bike</a>

	<form action="TSK.php" method="POST">


<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db('test',$con);

$ud="UPDATE storekeeper SET StName='Sneh' WHERE Stname='sneh' ";
$result=mysql_query($ud);

if($result)
{
	echo "Record Updated";
}
else
{
	echo "Failed To Update";
}

?>

</form>
<a href="TLogin.php">Sign up</a>

</body>
</html>