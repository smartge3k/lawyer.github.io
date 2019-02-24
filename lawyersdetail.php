<!DOCTYPE html>
<html lang="en">
<head>
  <title>all lawyers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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

    body, html {
    height: 100%;
    margin: 0;
    font: 400 15px/1.8 "Lato", sans-serif;
    color: #777;
    }

    .main{
      padding: 50px;
    }


    /*Style the profile card*/
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    .contactbtn{
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .contactbtn: hover, .social:hover {
      opacity: 0.7;
    }

    .fa {
      padding: 10px;
      font-size: 15px;
      width: 11%;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 50%;
    }

    .fa:hover {
        opacity: 1.0;
    }

    .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .fa-twitter {
      background: #55ACEE;
      color: white;
    }

    .fa-instagram {
      background: #125688;
      color: white;
    }

    .fa-skype {
      background: #00aff0;
      color: white;
    }

    .fa-yahoo {
      background: #430297;
      color: white;
    }

    .checked {
        color: orange;
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
      <a class="nav-link dropdown-toggle" href="#" id="" data-toggle="dropdown">
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

<div class="main">
  <h2><center><font color="#ff4c1a">Professional and highly trained</font></center></h2>
  <p><center>We sets a high standards and aims to provide excellence and personal to Clients<br>
  without the overheadexpenses</center></p><hr>



        <h2><center><u><font color="#ff4c1a">Family</font></u></center></h2><br>

    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              <p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </p>
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              <p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </p>
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              <p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </p>
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        
  </div>


<hr>
  <h2><center><u><font color="#ff4c1a">Children</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>


<hr>
  <h2><center><u><font color="#ff4c1a">Criminal</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>

<hr>
  <h2><center><u><font color="#ff4c1a">Land</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>

<hr>
  <h2><center><u><font color="#ff4c1a">Education</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>

<hr>
  <h2><center><u><font color="#ff4c1a">Inxomw-Tax</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
             <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>

<hr>
  <h2><center><u><font color="#ff4c1a">Islamic</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>

<hr>
  <h2><center><u><font color="#ff4c1a">Labour</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>

  <hr>
  <h2><center><u><font color="#ff4c1a">Anti-Terrorism</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>


  <hr>
  <h2><center><u><font color="#ff4c1a">Business</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>

  <hr>
  <h2><center><u><font color="#ff4c1a">Health & Food</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>


  <hr>
  <h2><center><u><font color="#ff4c1a">Civil Servant Services</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>

  <hr>
  <h2><center><u><font color="#ff4c1a">Drugs & Medician</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>


  <hr>
  <h2><center><u><font color="#ff4c1a">Agricultural</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>


  <hr>
  <h2><center><u><font color="#ff4c1a">Rent</font></u></center></h2><br>
    
    <div class="row">
        <div class="col-sm-4"> 
            <div class="card">
              <img src="b.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>  
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
          </div>
        <div class="col-sm-4"> 
          <div class="card">
              <img src="c.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a>
                  <a class="social" href="#"><i class="fa fa-skype"></i></a> 
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
               </div>
             <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="a.png" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">john@gmail.com</p>
              <p>LLB form  IIUI University</p>
              <p>LLM (if) form  IIUI University</p>
              <p>3 Years Job Experience</p>
              <b><u>Cases</b></u>
              <p>No. of cases appeared: 40</p>
              <p>Win: 30</p>
              <p>Lost: 10</p>
              <b><u>Ranking</u></b>
              .....
              <div>
                <div>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                  <a href="https://www.twitter.com" class="fa fa-twitter"></a>
                  <a class="social" href="#"><i class="fa fa-yahoo"></i></a> 
                  <a class="social" href="#"><i class="fa fa-skype"></i></a>  
                  <a class="social" href="#"><i class="fa fa-instagram"></i></a> 
                </div>
                <p><button class="contactbtn">Hire</button></p>
              </div>
            </div>
        </div>
  </div>

</body>