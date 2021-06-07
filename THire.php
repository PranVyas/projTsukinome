<html>
<head><title>T Hire</title>
<style>


a {
	text-decoration: none;
}
 
header nav {
    width: 100%;
    height: 60px;
    background-color: #fff;
}

header nav ul {
    float: left;
}

header nav ul li {
    float: left;
    list-style: none;
	padding-right: 30px;
}

header nav ul li a {
    font-family: arial;
    font-size: 16px;
    color: #111;
    line-height: 63px;
} 

body {
    background-image:url("BikeField.jpg");
}
.main-wrapper{
    margin: 0 auto;
    width: 1000px;
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

.signup-form button:hover {
    background-color: #111;
}
</style></head>


			
<h1>H.A.B G-BIKE</h1>
<h2>R I D E    T H E   C A P I T A L</h2>
</CENTER>
<header>
<nav>
<div class="main-wrapper">
<ul>
<li>
<a href="Ghome.php">HOME</a></li>
<li>
<a href="TLogin.php" >Sign up</a></li>
<li>
<a href="Ghome.php" >Login</a></li></ul>
</nav>
</header>
<section class="main-container">
<div class="main-wrapper">
<h3 >H I R E  &emsp;&emsp; H E R E</h3>


<form action="THireConn.php" method="POST"> 
PickUp     : <input type="text" name="pick" placeholder="pickup-location"><br><br>
Drop       : <input type="text" name="dropl" placeholder="drop-location"><br><br>
<button type="submit" name="hire" value="Search">Hire</button>

</form>
</div>
</section>




</form>
</body>
</html>
	