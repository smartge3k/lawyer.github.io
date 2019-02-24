
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

/* Style the tab */
.tab {
    overflow: hidden;
    background-color: #f1f1f1;
}

.topnav {
  overflow: hidden;
  background-color: #f1f1f1;
  border-top: 3px solid red;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 14px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: white;
    border-top: 3px solid #ff4c1a;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
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



<!--Side Nav-->


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



<!--Main Body-->


<div class="main">
  <h2>Payment</h2>
  
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'PHistory')">Payment History</button>
  <button class="tablinks" onclick="openCity(event, 'PSettings')">Payment Settings</button>
  <button class="tablinks" onclick="openCity(event, 'P')">Payment</button>
</div>

<div id="PHistory" class="tabcontent">
  <table class="table table-bordered table-hover">
    <thead>
      <h4>All</h4><hr>
      <tr bgcolor="aqua">
         <th>Sr No.</th>
        <th>Date</th>
        <th>Mode of Payment</th>
        <th>Name</th>
        <th>Paid</th>
      </tr>
    </thead>
    <tbody>
      <tr class="info">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

  <table class="table table-bordered table-hover">
    <thead>
      <h4>Pending</h4><hr>
      <tr bgcolor="red">
        <th>Sr No.</th>
        <th>Date</th>
        <th>Mode of Payment</th>
        <th>Name</th>
        <th>Paid</th>
      </tr>
    </thead>
    <tbody>
      <tr class="danger">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered table-hover">
    <thead>
      <h4>Received</h4>
      <tr bgcolor="green">
         <th>Sr No.</th>
        <th>Date</th>
        <th>Mode of Payment</th>
        <th>Name</th>
        <th>Paid</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<div id="PSettings" class="tabcontent">
  <h3><center><font color="#ff4c1a"><b>Mode of Payment</b></font></center></h3><hr>

  <!--Credit card Details-->

  <h4>Credit Card</h4>
  <table>
      <tr>
        <td><label for="crdtyp">Card type</label></td>
        <td>
          <select name="crdtyp">
            <option value="day">Please select</option>
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
         </select> 
        </td>
      </tr>

      <tr>
        <td><label for="crdnum">Card number</label></td>
        <td><input type="text" class="form-control" id="crdnum" name=""></td>
      </tr>

      <tr>
        <td><label for="crdexpiry">Card expiry (mm/yy)</label></td>
        <td><input type="text" class="form-control" id="crdexpiry" name="crdexpiry"></td>
      </tr>

      <tr>
        <td><label for="verify">Verification code</label></td>
        <td><input type="text" class="form-control" id="verify" name="verify"></td>
      </tr>
    
      <tr>
        <td></td>
        <td><label><input type="checkbox">Save this payment method</label></td>
      </tr><br>
  </table><hr>


  <!--Bank Acoount Details-->
  <h4>Bank Acoount Details</h4>
  <table>

      <tr>
        <td><label for="bankcde">Bank code</label></td>
        <td><input type="text" class="form-control" id="bankcde" name="bankcde"></td>
      </tr>

      <tr>
        <td><label for="accounntnum">Account number</label></td>
        <td><input type="text" class="form-control" id="accounntnum" name="accounntnum"></td>
      </tr>

      <tr>
        <td><label for="accountname">Name on account</label></td>
        <td><input type="text" class="form-control" id="aname" name="accountname"></td>
      </tr>
    
      <tr>
        <td></td>
        <td><label><input type="checkbox">Save this payment method</label></td>
      </tr><br>
  </table><hr>

  <!--BankDraft-->
  <h4>Bank Draft</h4>
  <table>

      <tr>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
      </tr>
    
      <tr>
        <td></td>
        <td><label><input type="checkbox">Save this payment method</label></td>
      </tr><br>
  </table><hr>


  <!--Easypaisa-->
  <h4>Easypaisa</h4>
  <table>

      <tr>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
      </tr>
    
      <tr>
        <td></td>
        <td><label><input type="checkbox">Save this payment method</label></td>
      </tr><br>
  </table><hr>

</div>

<div id="P" class="tabcontent">
  <h3>Payment</h3>
  <p>abcjagiai</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>
