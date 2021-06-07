<html>
<head>
<style>
body {
    background-image:url("BikeField.jpg");
}
.main-wrapper{
    margin: 0 auto;
    width: 1000px;
}
main-container {
    padding-top: 40px;
}
.signup-form {
    width: 400px;
    margin: 0 auto;
    padding-top: 30px;
}

.signup-form input {
    width: 90%;
    height: 40px;
    padding: 0px 5%;
    margin-bottom: 4px;
    margin-right: 10px; 
    border: none;
    background-color: #fff;
    font-family: arial;
    font-size: 16px;
    color: #111;
    line-height: 40px;
}    
  
.signup-form button {
    display: block;
    margin: 0 auto;
    width: 30%;
    height: 40px; 
    border: none;
    background-color: #222;
    font-family: arial;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
} 

</style>
</head>
<body>

<header>
	
		<h2>Sign up</h2>
		
			
</header>
<nav>


<section class="main-container">
	<div class="main-wrapper">
		<form  action="TRegConn.php" method="POST">
			<input type="text" name="fname" placeholder="Firstname">
			<input type="text" name="lname" placeholder="Lastname">
			<input type="text" name="uname" placeholder="Username">
			<input type="Password" name="pwd" placeholder="Password">
			<input type="text" name="email" placeholder="e-mail">
			<input type="text" name="phone" placeholder="phone number">
			<input type="text" name="sex" placeholder="Gender">
			
			<button type="submit" name="insert">Sign up</button>
		</form>
	</div>
	</nav>
</section>
	



</body>
</html>