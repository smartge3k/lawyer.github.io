<?php 
	require_once('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lawyer Registration - goLegal</title>
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

	/* Float signin buttons and add an equal width */
	.signupbtn {
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
          
          <div class="form-group">
              <div class="inner-addon left-addon">
                <b>User Name</b><br>
                <input type="text" required class="form-control" name="lawyers_firstname" placeholder="First Name" required>
                <input type="text" required class="form-control" name="lawyers_lastname" placeholder="Last Name" required>
              </div>
          </div>

          <div class="form-group">
              <div class="inner-addon left-addon">
                <b>Email</b><input type="text" required class="form-control" name="lawyers_email" placeholder="Email" required>
              </div>
          </div>

          <div class="form-group">
              <div class="inner-addon left-addon">
                <b>CNIC</b><input type="text" required class="form-control" name="lawyers_cnic" placeholder="xxxxx-xxxxxxx-x" required>
              </div>
          </div>

          <div class="form-group">
              <div class="inner-addon left-addon">
                <b>Mobile No.</b><input type="text"  required class="form-control" name="lawyers_mob" placeholder="+92xxx-xxxxxxx" required>
              </div>
          </div>

          <div class="form-group">
              <div class="inner-addon left-addon">
                <b>Date Of Birth</b><br>
                  <select name="birth_day" required>
                      <option value="">-- Select Day --</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
            <select name="birth_month" required>
              <option value="">-- Select Month --</option>
              <option value="Jan">Jan</option>
              <option value="Feb">Feb</option>
              <option value="Mar">Mar</option>
              <option value="Apr">Apr</option>
              <option value="May">May</option>
              <option value="Jun">Jun</option>
              <option value="Jul">Jul</option>
              <option value="Aug">Aug</option>
              <option value="Sep">Sep</option>
              <option value="Oct">Oct</option>
              <option value="Nov">Nov</option>
              <option value="Dec">Dec</option>
            </select>
            <select name="birth_year" required>
              <option value="day">-- Select Year --</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
            </select>
              </div>
          </div>

          <b>Qualification</b>
          <div class="form-group">
              <div class="inner-addon left-addon">
                Matriculation<input type="text" required class="form-control" name="lawyers_matric" placeholder="Name of Institute" required>
                Intermediate<input type="text" required class="form-control" name="lawyers_inter" placeholder="Name of Institute" required>
                LLB(hons)<input type="text" required class="form-control" name="lawyers_llb" placeholder="Name of Institute" required>
                LLM<input type="text" required class="form-control" name="lawyers_llm" placeholder="Name of Institute (if applicable)">
              </div>
          </div>
		  
		  
		  <b>Area of Work</b>
          <div class="form-group">
              <div class="inner-addon left-addon">
                City<input type="text" required class="form-control" name="city" placeholder="City" required>
                Province<input type="text" required class="form-control" name="province" placeholder="Province" required>
              </div>
          </div>

          <b>Proficiency</b>
          <div class="form-group">
              <table width="100%">
                <tr>
                  <td><input type="checkbox" name="prof[]" value="family">Family</td>
                  <td><input type="checkbox" name="prof[]" value="children">Children</td>
                  <td><input type="checkbox" name="prof[]" value="criminal">Criminal</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="prof[]" value="land">Land</td>
                  <td><input type="checkbox" name="prof[]" value="education">Eucational</td>
                  <td><input type="checkbox" name="prof[]" value="incometax">Income-Tax</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="prof[]" value="islamic">Islamic</td>
                  <td><input type="checkbox" name="prof[]" value="labour">Labour</td>
                  <td><input type="checkbox" name="prof[]" value="antiterrorism">Anti-Terrorism</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="prof[]" value="business">Business</td>
                  <td><input type="checkbox" name="prof[]" value="healthnfood">Health And Food</td>
                  <td><input type="checkbox" name="prof[]" value="civil-servants-service">Civial Servent Service</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="prof[]" value="drugsnmedician">Drugs & Medician</td>
                  <td><input type="checkbox" name="prof[]" value="agriculture">Agricultural</td>
                  <td><input type="checkbox" name="prof[]" value="rent">Rent</td>
                </tr>
              </table>
          </div>

          <b>Job Experience</b><br>
          <div class="form-group">
              <div class="inner-addon left-addon">
                 <select name="lawyers_experience" required>
                      <option value="day">Years</option>
                      <option value="one">1</option>
                      <option value="two">2</option>
                      <option value="three">3</option>
                      <option value="four">4</option>
                      <option value="five">5</option>
                      <option value="six">6</option>
                      <option value="seven">7</option>
                      <option value="eight">8</option>
                      <option value="nine">9</option>
                      <option value="ten">10</option>
                      <option value="eleven">11</option>
                      <option value="twelve">12</option>
                      <option value="thirteen">13</option>
                      <option value="fourteen">14</option>
                      <option value="fifteen">15</option>
                      <option value="sixteen">Other..</option>
                 </select>
              </div>
          </div>

          <b>Licence Info</b><br>
          Licence No.
          <div class="form-group">
              <div class="inner-addon left-addon">
                <input type="text" required class="form-control" name="lawyers_licenceno" placeholder="Licence #" required>
              </div>
          </div>

          <div class="form-group">
              <div class="inner-addon left-addon">
                <span style="float: left; width: 100px">Issue Date:</span>
                  <select name="day_issue" required>
                      <option value="">Day</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                    <select name="month_issue" id="month_issue" required>
                      <option value="">Month</option>
                      <option value="Jan">Jan</option>
                      <option value="Feb">Feb</option>
                      <option value="Mar">Mar</option>
                      <option value="Apr">Apr</option>
                      <option value="May">May</option>
                      <option value="Jun">Jun</option>
                      <option value="Jul">Jul</option>
                      <option value="Aug">Aug</option>
                      <option value="Sep">Sep</option>
                      <option value="Oct">Oct</option>
                      <option value="Nov">Nov</option>
                      <option value="Dec">Dec</option>
                    </select>
                    <select name="year_issue" id="year_issue" required>
                      <option value="">Year</option>
                      <option value="2018">2018</option>
                      <option value="2017">2017</option>
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                      <option value="1996">1996</option>
                      <option value="1995">1995</option>
                      <option value="1994">1994</option>
                      <option value="1993">1993</option>
                      <option value="1992">1992</option>
                      <option value="1991">1991</option>
                      <option value="1990">1990</option>
                      <option value="1989">1989</option>
                      <option value="1988">1988</option>
                      <option value="1987">1987</option>
                      <option value="1986">1986</option>
                      <option value="1985">1985</option>
                      <option value="1984">1984</option>
                      <option value="1983">1983</option>
                      <option value="1982">1982</option>
                      <option value="1981">1981</option>
                      <option value="1980">1980</option>
                    </select><br><br>

                
                <span style="float: left; width: 100px">Expiry Date:</span>
                  <select name="day_expire" required>
                      <option value="">Day</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                    <select name="month_expire" required>
                      <option value="">Month</option>
                      <option value="Jan">Jan</option>
                      <option value="Feb">Feb</option>
                      <option value="Mar">Mar</option>
                      <option value="Apr">Apr</option>
                      <option value="May">May</option>
                      <option value="Jun">Jun</option>
                      <option value="Jul">Jul</option>
                      <option value="Aug">Aug</option>
                      <option value="Sep">Sep</option>
                      <option value="Oct">Oct</option>
                      <option value="Nov">Nov</option>
                      <option value="Dec">Dec</option>
                    </select>
                    <select name="year_expire" required>
                      <option value="day">Year</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                    </select>
                  </select>
              </div>
            </div>
              
              <div>
                <span style="float: left;width: 100px"><b>Gender</b></span> 
                <input type="radio" name="lawyers_gender" value="male" checked>Male
                <input type="radio" name="lawyers_gender" value="female"> Female
              </div><br>

          <div class="form-group">
              <div class="inner-addon left-addon">
                <b>Password</b>
                <input type="password" required class="form-control" id="passInput" name="lawyers_password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
                <input type="checkbox" onclick="passFunction()">Show Password
              </div>
            </div>

          <div class="form-group">
              <div class="inner-addon left-addon">
                <b>Confirm Password</b>
               <input type="password" required class="form-control" id="cpassInput" name="lawyers_cpassword" placeholder="Repeat Password" required>
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

        <div class="clearfix">
          <button type="submit" name="reg_lawyer" class="signupbtn" style="background-color: #ff4c1a; color: white; padding: 8px 20px; margin: 8px 0; border: none; border-radius: 8px; cursor: pointer; width: 50%">Create Account</button><hr>
          <center> By creating an account you agree to our <a href="#term">Terms & Privacy</a><br>
              Already have an account? <a href="lawyersignin.php"> Sign in.</a>
        </div>
      </div>
    </form>

<?php
	if(isset($_POST['reg_lawyer'])){
		//echo "<pre>"; print_r($_POST); echo "</pre>"; 
		$fname=$_POST['lawyers_firstname'];
		$lname=$_POST['lawyers_lastname'];
		$email=$_POST['lawyers_email'];
		$cnic=$_POST['lawyers_cnic'];
		$mob=$_POST['lawyers_mob'];
		$dob=$_POST['birth_day']."-". $_POST['birth_month']."-".$_POST['birth_year'];
		$city=$_POST['city'];
		$province=$_POST['province'];
		$matric=$_POST['lawyers_matric'];
		$inter=$_POST['lawyers_inter'];
		$llb=$_POST['lawyers_llb'];
		$llm=$_POST['lawyers_llm'];
		$experience=$_POST['lawyers_experience'];
		$licenceno=$_POST['lawyers_licenceno'];
		$issue=$_POST['day_issue']."-". $_POST['month_issue']."-".$_POST['year_issue'];
		$expire=$_POST['day_expire']."-". $_POST['month_expire']."-".$_POST['year_expire'];
		$gender=$_POST['lawyers_gender'];
		$password=$_POST['lawyers_password'];
		
		$query="INSERT into lawyers_signup SET 
			lawyer_firstname = '".$fname."', 
			lawyers_lastname = '".$lname."', 
			lawyers_email = '".$email."', 
			lawyers_cnic = '".$cnic."', 
			lawyers_mob = '".$mob."', 
			lawyers_dob = '".$dob."', 
			city = '".$city."', 
			province = '".$province."', 
			lawyers_matric = '".$matric."', 
			lawyers_inter = '".$inter."', 
			lawyers_llb = '".$llb."', 
			lawyers_llm = '".$llm."', 
			lawyers_experience = '".$experience."', 
			lawyers_licenceno = '".$licenceno."', 
			lawyers_lissue = '".$issue."', 
			lawyers_lexpire = '".$expire."', 
			lawyers_gender = '".$gender."', 
			lawyers_password = '".$password."'
		";
			
			
		// initializing variables
		$errors = array(); 
		// connect to the database
		$insert = mysqli_query($db, $query) or die(mysqli_error($db));
		$insert_id = mysqli_insert_id($db);
		
		if(!$insert)
		{
			die("Message:" . mysqli_error($db));
		}
		else
		{
			foreach($_POST['prof'] as $prof){
				$insert_prof = "INSERT INTO lawyers_proficiencies SET lawyer_id = '".$insert_id."', lawyer_proficiency = '".$prof."'";
				$insert = mysqli_query($db, $insert_prof) or die(mysqli_error($db));
			}
			echo "<strong>Account Created Successfully!</strong><br>";
		} 
	}
	else{
		echo "<strong>Email or password is invalid<br></strong>";
	}
        // mysqli_close($con); 
?>

  </div>
</body>
</html>