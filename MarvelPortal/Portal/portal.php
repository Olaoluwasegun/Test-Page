<!Doctype>
<html lang="en">
<head>
<title> Marvelous university </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- bootstrap  -->
  <!-- END CSS -->

  <!-- SCRIPT -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!-- END SCRIPT -->
<style>


* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-image: url(2001073.jpg);
    padding: 30px;
    text-align: center;
    font-size: 25px;
    font-family: courier new body copy;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 15%;
    height: 300px; /* only for demonstration, should be removed */
    background: white;
    /*background-image:  url("2001072.jpg");*/
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    background-image: url("2001010.jpg");
    /*height: 300px;  only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 5px;
    text-align: center;
    color: white;
}


/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}


</style>
</head>
<body>
	<header>
                <img src="MU_LOGO.png" alt="my logo" width=180 height=100 style="float:left";>
        </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href ='signup.php'><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul

<center><h1> MARVELOUS UNIVERSITY </h1></center>
<h3>Welcome to marvelous university web portal</h3>
</header>

<nav>
	<h1></h1>
	</nav>
    <article>
    <center><h1>LOGIN</h1></center>
<form action="login.php" method="POST">
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-4">
<div class= "form-group">
    <i class="fa fa-envelope icon"></i>
<label for="emailaddress">Email Address</label>
<input type="text" class="form-control" id="emailaddress" placeholder="Email Address" required="" name="emailaddress">
</div>
<div class= "form-group">
    <i class="fa fa-key icon"></i>
<label for="password">password</label>
<input type="password" class="form-control" value="" id="password" placeholder="password" required="" name="password">
</div>
<center>
<a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login </a> </center>
</body>

<footer>
copyrights 2018
</footer>
</article>
</html>