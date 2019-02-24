<?php 
	ob_start();
	session_start();
	require_once('includes/connection.php');
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_email']);
	
	$error='';
	if(isset($_POST['signin_user'])){
	if(empty($_POST['email']) || empty($_POST['password'])){
		echo "Please Enter Username and Password";
	}
	else{
		//echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
		$email=$_POST['email'];
		$password=$_POST['password'];
		$errors = array(); 
		
		if(isset($_POST['is_lawyer']) && $_POST['is_lawyer'] == 'Yes'){
			$query=mysqli_query($db,"SELECT * FROM lawyers_signup WHERE lawyers_email='$email' AND lawyers_password='$password'");
		}
		else{
			$query=mysqli_query($db,"SELECT * FROM users_signup WHERE user_email='$email' AND user_password='$password'");
		}
		$count=mysqli_num_rows($query);
		if($count==1){
			$row = mysqli_fetch_assoc($query);		
			$user_id = $_POST['is_lawyer'] == 'Yes'?$row['lawyer_id']:$row['user_id'];
			$user_name = $_POST['is_lawyer'] == 'Yes'?$row['lawyer_firstname']:$row['user_name'];
			$user_email = $_POST['is_lawyer'] == 'Yes'?$row['lawyers_email']:$row['user_email'];
			
			$_SESSION['user_id']=$user_id;
			$_SESSION['user_name']=$user_name;
			$_SESSION['user_email']=$user_email;
			
			if(isset($_POST['is_lawyer']) && $_POST['is_lawyer'] == 'Yes'){
				header("Location:lawyer/accountsettings.php");   
			}
			else{
				header("Location:client/clientdashboard2.php");   
			}
		  }
		  else{
	
			 $error="Email or password is invalid";
	
		  }
	   mysqli_close($db);
	   }
   }         
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>signin</title>
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

	.signincontainer{
			width: 50%;
			background-color: white;
			border: 0px solid #ccc;
	}

	h1{
		color: #ff4c1a;
	}

	/* Float signin buttons and add an equal width */
	.signinbtn {
	    float:;
	    width: 25%;
	}

	/* Clear floats */
	.clearfix::after {
	    content: "";
	    clear: both;
	    display: table;
	}

	/* Change styles for signup button on extra small screens */
	@media screen and (max-width: 300px) {
	    .signupbtn {
	       width: 100%;
	    }
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


	<!--sign in body start-->
	<div class="bg">
	<div class="container">
		<h1>Sign in</h1>
		  <div class="signincontainer">
		  	<?php echo $error; ?>
            <form class="form" action="" method="POST">
		  		<div class="form-group">
			      <label for="inputdefault">Email</label>
			      <input type="text" class="form-control" name="email" placeholder="Email" >
    			</div>
		    	<div class="form-group">
			      <label for="inputdefault">Password</label>
			      <input type="password" class="form-control" id="passInput" name="password" placeholder="Password" required>
            		<input type="checkbox" onclick="passFunction()">Show Password
                <script>

                  function passFunction() {
                      var x = document.getElementById("passInput");
                      if (x.type === "password") {
                          x.type = "text";
                      } else {
                          x.type = "password";
                      }
                  }
                </script>
    			</div>

		    	<input type="checkbox" name="is_lawyer" value="Yes"> Are You a Lawyer?

			    <div class="clearfix">
			      <button type="submit" name="signin_user" class="signinbtn" style="background-color: #ff4c1a; color: white; padding: 8px 20px; margin: 8px 0; border: none; border-radius: 8px; cursor: pointer; width: 50%;">Sign In</button><hr>
			   	  <center> By creating an account you agree to our <a href="terms and conditions.php">Terms & Privacy</a><br>
              Don't have an account yet? <a href="signup.php"> Sign up.</a>
          </center>
			    </div>
			   </form>
		  </div>
	</div>

</body>
</html>