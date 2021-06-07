<html>
<head><title>G Form</title>
<style type="text/css" >
/* 
reset code
*/

html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section { 
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000; 
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;   
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}

/*my code*/

.main-wrapper{
    margin: 0 auto;
    width: 1000px;
}

a {
    text-decoration: none;
}

body {
    background-image:url("BikeField.jpg");
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
}

header nav ul li a {
    font-family: arial;
    font-size: 16px;
    color: #111;
    line-height: 63px;
}

header .nav-login {
    float: right;
}

header .nav-login form {
    float: left;
    padding-top: 15px;
}

header .nav-login form input {
    float: left;
    width: 140px;
    height: 30px;
    padding: 0px 10px;
    margin-right: 10px;
    border: none;
    background-color: #ccc;
    font-family: arial;
    font-size: 14px;
    color: #111;
    line-height: 30px;
}

header .nav-login form button {
    float: left;
    width: 60px;
    height: 30px;
    margin-right: 10px;
    border: none;
    background-color: #f3f3f3;
    font-family: arial;
    font-size: 14px;
    color: #111;
    cursor: pointer;
}

header .nav-login form button:hover {
    background-color: #ccc;
}

header .nav-login a {
    display: block;
    width: 60px;
    height: 60px;
    border: none;
    float: left;
    background-color: #fff;
    font-family: arial;
    font-size: 16px;
    color: #111;
    line-height: 63px;
    cursor: pointer;
}

.main-container {
    padding-top: 40px;
}

.main-container h2 {
    font-family: arial;
    font-size: 40px;
    color: #111;
    line-height: 50px;
    text-align: center;
}

h1 {
	font-size: 22px;
	font-family: arial;
	line-height: 30px;
	float: left;
	padding-top: 20px;
	padding-left: 30px;
}

h3 {
	font-size: 22px;
	font-family: arial;
	line-height: 15px;
}
</style></head>

<body >

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="TAbout.php">G-bike</a></li><br>
				<li><a href="ALogin.php">Admin</a></li>
			</ul>
			<div class="nav-login">
				<form action="TLogConn.php" method="POST">
					<input type="text" name="uname" placeholder="Username/e-mail">
					<input type="password" name="pwd" placeholder="password">
					<button type="submit" name="submit" value="Register">LogIn</button>
				</form>
				<a href="TLogin.php">Sign up</a>
			</div>
		</div>
	</nav>
</header>
<section class="main-container">
	<div class="main-wrapper">
		<h2>G-bike</h2>
	</div>
</section>
<center>
<font size="6" color="orange" > 
WELCOME &emsp;TO!<br>
</font>
<font size="6" color="green" > 
T H E &emsp;&emsp; C A P I T A L &emsp;&emsp; C I T Y 
</CENTER>
</font><br><br><br><br><br><br>

<center>
<h3>
KNOW  GANDHINAGAR<br> 
visit gujaratindia.com for more
<br>
</h3>
 
<font color="brown" size="4">
<h1>
Gandhinagar[ga:ndi'na:ger] Named For: MAHATMA GANDHI<br>
is the Capital City of GUJARAT in WESTERN INDIA .<br>
Located at Near 23km North of AHEMDABAD.<br>
It covers an estimated area of 177 sq.km & hold nearly 292,167 people as per 2011's survey.<BR> 
</h1>

</font>
</center>

</body>
</html>