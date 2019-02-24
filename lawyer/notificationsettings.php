
<!DOCTYPE html>
<html lang="en">
<head>
  <title>myAccount</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
  
.sidenav {
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #ff4c1a;
}

.main {
    margin-left: 250px; /* Same as the width of the sidenav */
    font-size: 15px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

/* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .savebtn {
    float:right;
    width: 25%;
  }

   /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
      .cancelbtn, .signupbtn {
         width: 100%;
      }
  }

.switch {
  position: relative;
  display: inline-block;
  width: 36px;
  height: 18px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 12px;
  width: 12px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(16px);
  -ms-transform: translateX(16px);
  transform: translateX(16px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>


<body>

<nav class="navbar navbar-inverse" style="border-radius:0%,">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="padding-left: 30px;">goLegal</a>
    </div>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group" style="padding-left: 30px;">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav" style="padding-right: 30px;">
      <li><a href="#">C Name</a></li>
      <li><a href="clientdashboard2.php">Home</a></li>
      <li><a href="#">Find Lawyer</a></li>
      <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Request"><span class="fa fa-handshake-o"></span></a></li>
      <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Notifications"><span class="fa fa-bell-o"></span></a></li>
      <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Messages"><span class="fa fa-envelope-o"></span></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="caret"></span></a>
        <ul class="dropdown-menu" style="padding-right: 30px;"">
          <li><a href="accountsettings.php">Account Settings</a></li>
          <li><a href="notificationsettings.php">Notification Settings</a></li>
          <li><a href="payment.php">Payments</a></li>
          <li><a href="activitylog.php">Activity log</a></li>
        </ul>
      </li>
    </ul>

    <!--tooltip for showing msg noti etc with hover-->
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>

    <ul class="nav navbar-nav navbar-right" style="padding-right: 30px;">
      <li><a href="../lawyersignin.php"><span class="fa fa-sign-out"></span>Signout</a></li>
    </ul>
  </div>
</nav>

<div class="sidenav">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Lawyer Directory</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li><a class="dropdown-item" href="../directory/islamic/islamiclaws.php">Islamic Laws</a></li>
            <li><a class="dropdown-item" href="../directory/family/familylaws.php">Family Laws</a></li>
            <li><a class="dropdown-item" href="../directory/land/landlaws.php">Land Laws</a></li>
            <li><a class="dropdown-item" href="../directory/education/educationlaws.php">Education Laws</a></li>
            <li><a class="dropdown-item" href="../directory/labour/labourlaws.php">Labour Laws</a></li>
            <li><a class="dropdown-item" href="../directory/business/businesslaws.php">Business Laws</a></li>
            <li><a class="dropdown-item" href="../directory/civilservantsservice/civil-servants-servicelaws.php">Civil Servants Service Laws</a></li>
            <li><a class="dropdown-item" href="../directory/healthandfood/health&foodlaws.php">Health & Food Laws</a></li>
            <li><a class="dropdown-item" href="../directory/anti-terrorism/anti-terrorismlaws.php">Anti-Terrorism Laws</a></li>
            <li><a class="dropdown-item" href="../directory/incometax/incometaxlaws.php">Income Tax Laws</a></li>
            <li><a class="dropdown-item" href="../directory/alllaws.php">Others..</a></li>
          </ul>
        </div>
        </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Legal Topics</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Legal Services</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
           <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Legal Forms</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
           <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </div> 
</div>
</div>

<div class="main">
  <h2>Notifications</h2>
  <p>We'll always let you know about important changes, but you pick what else you want to hear about.</p><hr>
  <p>
      <span style="float: left"><b>When you're signed in</b></span> 
      <input type="radio" name="signin-noti" value="everyone-noti"> Get notifications from everyone
      <input type="radio" name="signin-noti" value="selected-noti" checked> Only people you follow
  </p><hr>

  <p>By email 
    <label class="switch">
      <input type="checkbox" checked>
      <span class="slider round"></span>
    </label>
  </p><hr>

  <p>On your phone
    <label class="switch">
      <input type="checkbox" checked>
      <span class="slider round"></span>
    </label>
  </p><hr>

  <button type="submit" class="cancelbtn" id="cancel" style="background-color: #ff4c1a; color: white; padding: 8px 20px; margin: 8px 0; border: none; border-radius: 8px; cursor: pointer; width: 50%;">Cancel</button>
  <button type="submit" name="reg_user" class="savebtn" name="save" style="background-color: green; color: white; padding: 8px 20px; margin: 8px 0; border: none; border-radius: 8px; cursor: pointer; width: 50%;">Save Changes</button>
</body>
</html>
