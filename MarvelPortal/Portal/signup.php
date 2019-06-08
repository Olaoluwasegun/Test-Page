<?php
include('code.php');
if(isset($_POST['insert']))
{

  //echo "Loading Fine";
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $emailaddress = $_POST['emailaddress'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  $contactaddress = $_POST['contactaddress'];
  $phonenumber = $_POST['phonenumber'];
  $dateofbirth = $_POST['dateofbirth'];
  $courseofstudy = $_POST['courseofstudy'];
  $matricnumber = $_POST['matricnumber'];
  $level = $_POST['level'];
  $sex = $_POST['sex'];
  

  //$query
  $pdoQuery = "INSERT INTO `userdata`(`firstname`,`middlename`, `lastname`, `emailaddress`, `password`, `confirmpassword`, `contactaddress`, `phonenumber`, `dateofbirth`, `courseofstudy`, `matricnumber`, `level`, `sex`) VALUES ('$firstname', '$middlename', '$lastname', '$emailaddress', '$password', '$confirmpassword', '$contactaddress', '$phonenumber', '$dateofbirth', '$courseofstudy', '$matricnumber', '$level', '$sex')";
  $pdoResult = $conn->query($pdoQuery);
  $successmessage = $pdoResult -> rowCount ();
  if ($successmessage > 0) {
    if ($password != $confirmpassword){
      echo "The passwords do not match";
    }
echo "<script> alert ('Data Submitted Successfully') ; </script>";
}
header ('location: dash.php');

}
?>
<!Doctype>
<html lang="en">
<head>
<title>Student's Registration </title>
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
  /* Style all input fields */
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
}

/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 10px;
}

/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
</style>

</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-5">
   <img src="MU_LOGO.png" alt="my logo" width=80 height=80 style="float:left";>
<h2 class="text-center">MARVELOUS UNIVERSITY PORTAL</h2>
<h3 class="text-center">STUDENT'S REGISTRATION</h3>
<form action="signup.php" method="POST">
<div class= "form-group">
<label for="firstname">First Name</label>
<input type="text" class="form-control" id="firstname" required="" name="firstname">
</div>
<div class= "form-group">
<label for="middlename">Middle Name</label>
<input type="text" class="form-control" id="middlename" required="" name="middlename">
</div>
<div class= "form-group">
<label for="lastname">Last Name</label>
<input type="text" class="form-control" id="lastname" required="" name="lastname">
</div>
<div class= "form-group">
<label for="emailaddress">Email Address</label>
<input type="text" class="form-control" id="emailaddress" required="" name="emailaddress">
</div>
<div class= "form-group">
<label for="psw">Password</label>
<input type="password" class="form-control" id="password" required="" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
</div>

<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

<div class= "form-group">
<label for="psw">Confirm Password</label>
<input type="password" class="form-control"  id="password" required="" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
</div>

<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

<div class= "form-group">
<label for="contactaddress">Contact Address</label>
<input type="text" class="form-control" id="contactaddress" required="" name="contactaddress">
</div>
<div class= "form-group">
<label for="phonenumber">Phone Number</label>
<input type="text" class="form-control" id="phonenumber" required="" name="phonenumber">
</div>
<div class= "form-group">
<label for="dateofbirth">Date of birth </label>
<input type="text" class="form-control" id="dateofbirth" placeholder="yyyy-mm-dd" required="" name="dateofbirth"><br>
</div>
<div class= "form-group">
<label for="courseofstudy">Course of study</label>
<input type="text" class="form-control" id="courseofstudy" required="" name="courseofstudy">
</div>
<div class= "form-group">
<label for="matricnumber">Matric Number</label>
<input type="text" class="form-control" id="matricnumber" required="" name="matricnumber">
</div>
<div class= "form-group">
<label for="level">Level</label>
<input type="text" class="form-control" id="level" required="" name="level">
</div>
<div class= "form-group">
<label for="sex">Gender  </label>
<select class="form-control" name="sex" id="sex" required="" name="sex">
<option value="">select gender</option>
<?php              
            $sql = "SELECT * FROM `gender` where status='1'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='".$data['id']."'>".$data['sex']."</option>";
            }

            ?> 
          </select>
        </div><br>
<button type="submit" class= "btn btn-default" name="insert" id="insert">Sign up</button>

</body>
<footer>
  <center>copyrights 2018</center>
</footer>
</html>