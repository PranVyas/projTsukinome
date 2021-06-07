<html>
<head><title>G Form</title>
<style>
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
</style>
</head>

<body >
			

<h1>H.A.B G-BIKE</h1>
<h2>R I D E    T H E   C A P I T A L</h2>


<form action="TRegConn.php" method="POST"> 
 First Name : <input type="text" name="fname" placeholder="Firstname"><br><br>
 Last Name  : <input type="text" name="lname" placeholder="Lastname"><br><br>
 Username   : <input type="text" name="uname" placeholder="Username"><br><br>
 Password   : <input type="Password" name="pwd" placeholder="Password"><br><br>
 Email      : <input type="text" name="email" placeholder="email"><br><br>
 Phone.No   : <input type="text" name="phone" placeholder="Phone"><br><br>
 Gender     : <input type="radio" name="sex" placeholder="Gender">
  <?php if (isset($sex) && $sex=="male") echo "checked";?>
   Male<input type="radio" name="sex">
  <?php if (isset($sex) && $sex=="female") echo "checked";?>
   Female
<button type="submit" name="submit">Sign up</button>



</body>
</html>