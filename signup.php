<!DOCTYPE html>
<html lang="en">
<head>
  <title>Client Registration - goLegal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <style>

  	/* Add padding to container elements */
    .navbar {
        padding: 10px 30px;
        width: 100%;
    }

    .nav-item{
      padding: 10px;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: #ff4c1a;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #f1f1f1}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }

    .bg {
    background-image: url("a.png");
    height: 100%; 
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
	}

	/* Full-width input fields */
	input[type=text], input[type=password] {
	    width: 100%;
	    padding: 8px 12px;
	    margin: 3px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
	}
	
	

	.container{
			padding: 10px;
			width: 100%;
			text-align: left;
	}

	.form{
		width:100%;
		padding: 30px;

	}

	.signupcontainer{
			width: 50%;
			background-color: white;
			border: 0px solid #ccc;
	}

	h1{
		color: #ff4c1a;
	}

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    float: left;
    width: 50%;
  }

	/* Clear floats */
	.clearfix::after {
	    content: "";
	    clear: both;
	    display: table;
	}

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
      .cancelbtn, .signupbtn {
         width: 100%;
      }
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

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}

.footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     height: 10%;
     background-color: black;
     color: white;
     text-align: center;
  }
  </style>

</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <!-- Brand -->
  <a class="navbar-brand" href="index.php">goLegal</a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Lawyer Directory
      </a>
      <div class="dropdown-content">
        <a class="dropdown-item" href="directory/islamic/islamiclaws.php">Islamic Laws</a>
        <a class="dropdown-item" href="directory/family/familylaws.php">Family Laws</a>
        <a class="dropdown-item" href="directory/land/landlaws.php">Land Laws</a>
        <a class="dropdown-item" href="directory/education/educationlaws.php">Education Laws</a>
        <a class="dropdown-item" href="directory/labour/labourlaws.php">Labour Laws</a>
        <a class="dropdown-item" href="directory/business/businesslaws.php">Business Laws</a>
        <a class="dropdown-item" href="directory/civilservantsservice/civil-servants-servicelaws.php">Civil Servants Service Laws</a>
        <a class="dropdown-item" href="directory/healthandfood/health&foodlaws.php">Health & Food Laws</a>
        <a class="dropdown-item" href="directory/anti-terrorism/anti-terrorismlaws.php">Anti-Terrorism Laws</a>
        <a class="dropdown-item" href="directory/incometax/incometaxlaws.php">Income Tax Laws</a>
        <a class="dropdown-item" href="directory/alllaws.php">Others..</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Legal Topics
      </a>
      <div class="dropdown-content">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Legal Services
      </a>
      <div class="dropdown-content">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Legal Forms
      </a>
      <div class="dropdown-content">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Talk to Lawyer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="signin.php"><span class="glyphicon glyphicon-user">Sign in</span></a>
    </li>
        
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
  </ul>
</nav>
</div>


	<!--sign up body start-->
  	<div class="bg">
  	<div class="container">
  	   <h1>Sign up</h1>
       <font color="white">Please fill in this form to create an account.</font><br><br>
          <div class="signupcontainer">
            <form class="form" action="" method="POST">
              <center>
                Are you a lawyer?<br>
                Deliver justice by signing with us.<a href="lawyersignup.php"> Sign up.</a><hr>
                <h4>Sign up</h4>
                
              </center>
          
          <div class="form-group">
              <div class="inner-addon left-addon">
                <input type="text" class="form-control" name="username" placeholder="UserName" required >
              </div>
          </div>

          <div class="form-group">
              <div class="inner-addon left-addon">
                <input type="text" class="form-control" name="email" placeholder="E-mail"  required>
              </div>
          </div>

          <div class="form-group">
              <div class="inner-addon left-addon">
                <input type="password" class="form-control" id="passInput" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <input type="checkbox" onclick="passFunction()">Show Password
              </div>
            </div>

          <div class="form-group">
              <div class="inner-addon left-addon">
               <input type="password" class="form-control" id="cpassInput" name="cpassword" placeholder="Repeat Password" required>
                <input type="checkbox" onclick="cpassFunction()">Show Password
                <script>

                  function passFunction() {
                      var x = document.getElementById("passInput");
                      if (x.type === "password") {
                          x.type = "text";
                      } else {
                          x.type = "password";
                      }
                  }

                  function cpassFunction() {
                      var x = document.getElementById("cpassInput");
                      if (x.type === "password") {
                          x.type = "text";
                      } else {
                          x.type = "password";
                      }
                  }

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

                <div id="message">
                  <h3>Password must contain the following:</h3>
                  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                  <p id="number" class="invalid">A <b>number</b></p>
                  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
              </div>
          </div>
          <input type="checkbox" checked="checked"> Remember me

          <div class="clearfix">
            <button type="submit" class="signupbtn" id="cancel" style="background-color: #ff4c1a; color: white; padding: 8px 20px; margin: 8px 0; border: none; border-radius: 8px; cursor: pointer; width: 50%;">Cancel</button>
            <button type="submit" name="reg_user" class="signupbtn" style="background-color: green; color: white; padding: 8px 20px; margin: 8px 0; border: none; border-radius: 8px; cursor: pointer; width: 50%;">Sign Up</button>
            <hr>
            <center> By creating an account you agree to our <a href="#term">Terms & Privacy</a><br>
                Already have an account? <a href="signin.php"> Sign in.
            </center>
          </div>
      </div>
    </form>
     <?php
     if(isset($_POST['reg_user'])){
                 if(empty($_POST['email']) || empty($_POST['password'])){
                      echo "<strong>Must Enter All Mandatory Fields</strong>";
                  }
          else{
             $name=$_POST['username'];
             $email=$_POST['email'];
             $password=$_POST['password'];
                
           $query="INSERT into users_signup (user_name,user_email,user_password) VALUES ('{$name}','{$email}','{$password}')";
                       // initializing variables
            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword  = "";
            $dbName = "fyp";
            $errors = array(); 

            // connect to the database
            $db = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                     $insert = mysqli_query($db, $query);
          
                    if(!$insert)
                    {
                      die("Message:" . mysqli_error($connection));
                    }
                    else
                    {
                      echo "<strong>Account Created Successfully!</strong><br>";
                    } 
               }
   }
     else{
   echo "<strong>Email or password is invalid<br></strong>";
   }
        // mysqli_close($con); 
      ?>
   
  
</body>
</html>