

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
  

.main {
    margin-left: 250px; /* Same as the width of the sidenav */
    font-size: 15px; /* Increased text to enable scrolling */
    padding: 0px 10px;
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


<!--Main Body-->

<div class="main">
  <h2>Welcome !</h2>

</body>
</html>
