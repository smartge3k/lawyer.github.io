<?php
	session_start();
	
	$userId = $_SESSION['user_id'];
	require_once('../includes/connection.php');
	
	if(isset($_POST['account_submit']) && $_POST['account_submit'] == 'Yes'){
		//echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
		$lawyers_dob = $_POST['birth_day']."-".$_POST['birth_month']."-".$_POST['birth_year'];
		$lawyers_lissue = $_POST['day_issue']."-".$_POST['month_issue']."-".$_POST['year_issue'];
		$lawyers_lexpire = $_POST['day_expire']."-".$_POST['month_expire']."-".$_POST['year_expire'];
		
		$update_query = "UPDATE lawyers_signup SET
			lawyer_firstname = '".$_POST['lawyer_firstname']."',
			lawyers_lastname = '".$_POST['lawyers_lastname']."',
			lawyers_email = '".$_POST['lawyers_email']."',
			lawyers_cnic = '".$_POST['lawyers_cnic']."',
			lawyers_mob = '".$_POST['lawyers_mob']."',
			lawyers_dob = '".$lawyers_dob."',
			city = '".$_POST['city']."',
			province = '".$_POST['province']."',
			lawyers_matric = '".$_POST['lawyers_matric']."',
			lawyers_inter = '".$_POST['lawyers_inter']."',
			lawyers_llb = '".$_POST['lawyers_llb']."',
			lawyers_llm = '".$_POST['lawyers_llm']."',
			lawyers_experience = '".$_POST['lawyers_experience']."',
			lawyers_licenceno = '".$_POST['lawyers_licenceno']."',
			lawyers_lissue = '".$lawyers_lissue."',
			lawyers_lexpire = '".$lawyers_lexpire."',
			lawyers_password = '".$_POST['lawyers_password']."'
			WHERE lawyer_id = '".$userId."'			
		";
		
		$update = mysqli_query($db, $update_query) or die(mysqli_error($db));
		
		foreach($_POST['prof'] as $prof){
			$check_if_exist_query = "SELECT * FROM lawyers_proficiencies WHERE lawyer_id = '".$userId."' AND lawyer_proficiency = '".$prof."'";
			$chek_if_exists = mysqli_query($db, $check_if_exist_query) or die(mysqli_error($db));
			if(mysqli_num_rows($chek_if_exists) == 0){
				$insert_query = "INSERT INTO lawyers_proficiencies SET lawyer_id = '".$userId."', lawyer_proficiency = '".$prof."'";
				$insert_prof = mysqli_query($db, $insert_query) or die(mysqli_error($db));
			}
		}
		$success_msg = "Account has been updated Successfully.";
	}
	
	$acc_query = "SELECT * FROM lawyers_signup l
		INNER JOIN lawyers_proficiencies lp
		ON l.lawyer_id = lp.lawyer_id
		WHERE l.lawyer_id = '".$userId."'
		LIMIT 1
	";
	//echo $acc_query;
	$get_acc_details = mysqli_query($db, $acc_query) or die(mysqli_error($db));
	if(mysqli_num_rows($get_acc_details) > 0){
		$acc_row = mysqli_fetch_assoc($get_acc_details);
	}
	
	$prof_query = "SELECT * FROM lawyers_proficiencies WHERE lawyer_id = '".$userId."'";
	$get_profs = mysqli_query($db, $prof_query) or die(mysqli_error($db));
	$profs = array();
	while($row_prof = mysqli_fetch_assoc($get_profs)){
		$profs[] = $row_prof;
	}
	//echo "<pre>"; print_r($profs); echo "</pre>";
	
	function in_array_custom($str, $profs){
		foreach($profs as $prof){
			if(in_array($str, $prof)){
				return true;
			}
		}
		return false;
	}
?>
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
      <li><a href="#"><?php echo $acc_row['lawyer_firstname']." ".$acc_row['lawyers_lastname']; ?></a></li>
      <li><a href="clientdashboard2.php">Home</a></li>
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
  <h2>Account</h2>
  <p>Change your basis account Information.</p><hr>
  <?php
	if(isset($success_msg) && $success_msg != ""){ ?>
		<p><?php echo $success_msg; ?></p>
	<?php }
  ?>

<table>
      <form action="" method="post">
	  <!--<tr>
        <td><label for="name">Username</label></td>
        <td><input type="text" class="form-control" id="name"  name="name"></td>
      </tr>-->

      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="email" class="form-control" id="email"  name="lawyers_email" value="<?php echo $acc_row['lawyers_email']; ?>"></td>
      </tr>

      <tr>
        <td><label for="pwd">Old Password</label></td>
        <td><input type="password" class="form-control" id="pwd"  name="lawyers_password" value="<?php echo $acc_row['lawyers_password']; ?>"></td>
      </tr>

      <tr>
        <td><label for="pwd">New Password</label></td>
        <td><input type="password" class="form-control" id="pwd"  name="lawyers_cpassword" value="<?php echo $acc_row['lawyers_password']; ?>"></td>
      </tr>
      
      <tr>
        <td><label for="pwd">First Name</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="lawyer_firstname" value="<?php echo $acc_row['lawyer_firstname']; ?>"></td>
      </tr>
      
      <tr>
        <td><label for="pwd">Last Name</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="lawyers_lastname" value="<?php echo $acc_row['lawyers_lastname']; ?>"></td>
      </tr>
      
      <tr>
        <td><label for="pwd">CNIC</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="lawyers_cnic" value="<?php echo $acc_row['lawyers_cnic']; ?>"></td>
      </tr>
      
      
      <tr>
        <td><label for="pwd">Mobile No.</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="lawyers_mob" value="<?php echo $acc_row['lawyers_mob']; ?>"></td>
      </tr>
      
      <tr>
        <td><label for="pwd">Date of Birth.</label></td>
        <td>
        	<?php
            	$dob_array = explode("-",$acc_row['lawyers_dob']);
				$birth_day = $dob_array[0];
				$birth_month = $dob_array[1];
				$birth_year = $dob_array[2];
			?>
            <select name="birth_day" required>
                      <option value="">-- Select Day --</option>
                      <option <?php echo $birth_day == '1'?'selected="selected"':"";?> value="1">1</option>
                      <option <?php echo $birth_day == '2'?'selected="selected"':"";?> value="2">2</option>
                      <option <?php echo $birth_day == '3'?'selected="selected"':"";?> value="3">3</option>
                      <option <?php echo $birth_day == '4'?'selected="selected"':"";?> value="4">4</option>
                      <option <?php echo $birth_day == '5'?'selected="selected"':"";?> value="5">5</option>
                      <option <?php echo $birth_day == '6'?'selected="selected"':"";?> value="6">6</option>
                      <option <?php echo $birth_day == '7'?'selected="selected"':"";?> value="7">7</option>
                      <option <?php echo $birth_day == '8'?'selected="selected"':"";?> value="8">8</option>
                      <option <?php echo $birth_day == '9'?'selected="selected"':"";?> value="9">9</option>
                      <option <?php echo $birth_day == '10'?'selected="selected"':"";?> value="10">10</option>
                      <option <?php echo $birth_day == '11'?'selected="selected"':"";?> value="11">11</option>
                      <option <?php echo $birth_day == '12'?'selected="selected"':"";?> value="12">12</option>
                      <option <?php echo $birth_day == '13'?'selected="selected"':"";?> value="13">13</option>
                      <option <?php echo $birth_day == '14'?'selected="selected"':"";?> value="14">14</option>
                      <option <?php echo $birth_day == '15'?'selected="selected"':"";?> value="15">15</option>
                      <option <?php echo $birth_day == '16'?'selected="selected"':"";?> value="16">16</option>
                      <option <?php echo $birth_day == '17'?'selected="selected"':"";?> value="17">17</option>
                      <option <?php echo $birth_day == '18'?'selected="selected"':"";?> value="18">18</option>
                      <option <?php echo $birth_day == '19'?'selected="selected"':"";?> value="19">19</option>
                      <option <?php echo $birth_day == '20'?'selected="selected"':"";?> value="20">20</option>
                      <option <?php echo $birth_day == '21'?'selected="selected"':"";?> value="21">21</option>
                      <option <?php echo $birth_day == '22'?'selected="selected"':"";?> value="22">22</option>
                      <option <?php echo $birth_day == '23'?'selected="selected"':"";?> value="23">23</option>
                      <option <?php echo $birth_day == '24'?'selected="selected"':"";?> value="24">24</option>
                      <option <?php echo $birth_day == '25'?'selected="selected"':"";?> value="25">25</option>
                      <option <?php echo $birth_day == '26'?'selected="selected"':"";?> value="26">26</option>
                      <option <?php echo $birth_day == '27'?'selected="selected"':"";?> value="27">27</option>
                      <option <?php echo $birth_day == '28'?'selected="selected"':"";?> value="28">28</option>
                      <option <?php echo $birth_day == '29'?'selected="selected"':"";?> value="29">29</option>
                      <option <?php echo $birth_day == '30'?'selected="selected"':"";?> value="30">30</option>
                      <option <?php echo $birth_day == '31'?'selected="selected"':"";?> value="31">31</option>
                    </select>
            <select name="birth_month" required>
              <option value="">-- Select Month --</option>
              <option <?php echo $birth_month == 'Jan'?'selected="selected"':"";?> value="Jan">Jan</option>
              <option <?php echo $birth_month == 'Feb'?'selected="selected"':"";?> value="Feb">Feb</option>
              <option <?php echo $birth_month == 'Mar'?'selected="selected"':"";?> value="Mar">Mar</option>
              <option <?php echo $birth_month == 'Apr'?'selected="selected"':"";?> value="Apr">Apr</option>
              <option <?php echo $birth_month == 'May'?'selected="selected"':"";?> value="May">May</option>
              <option <?php echo $birth_month == 'Jun'?'selected="selected"':"";?> value="Jun">Jun</option>
              <option <?php echo $birth_month == 'Jul'?'selected="selected"':"";?> value="Jul">Jul</option>
              <option <?php echo $birth_month == 'Aug'?'selected="selected"':"";?> value="Aug">Aug</option>
              <option <?php echo $birth_month == 'Sep'?'selected="selected"':"";?> value="Sep">Sep</option>
              <option <?php echo $birth_month == 'Oct'?'selected="selected"':"";?> value="Oct">Oct</option>
              <option <?php echo $birth_month == 'Nov'?'selected="selected"':"";?> value="Nov">Nov</option>
              <option <?php echo $birth_month == 'Dec'?'selected="selected"':"";?> value="Dec">Dec</option>
            </select>
            <select name="birth_year" required>
              <option value="day">-- Select Year --</option>
              <option <?php echo $birth_year == '2018'?'selected="selected"':"";?> value="2018">2018</option>
              <option <?php echo $birth_year == '2017'?'selected="selected"':"";?> value="2017">2017</option>
              <option <?php echo $birth_year == '2016'?'selected="selected"':"";?> value="2016">2016</option>
              <option <?php echo $birth_year == '2015'?'selected="selected"':"";?> value="2015">2015</option>
              <option <?php echo $birth_year == '2014'?'selected="selected"':"";?> value="2014">2014</option>
              <option <?php echo $birth_year == '2013'?'selected="selected"':"";?> value="2013">2013</option>
              <option <?php echo $birth_year == '2012'?'selected="selected"':"";?> value="2012">2012</option>
              <option <?php echo $birth_year == '2011'?'selected="selected"':"";?> value="2011">2011</option>
              <option <?php echo $birth_year == '2010'?'selected="selected"':"";?> value="2010">2010</option>
              <option <?php echo $birth_year == '2009'?'selected="selected"':"";?> value="2009">2009</option>
              <option <?php echo $birth_year == '2008'?'selected="selected"':"";?> value="2008">2008</option>
              <option <?php echo $birth_year == '2007'?'selected="selected"':"";?> value="2007">2007</option>
              <option <?php echo $birth_year == '2006'?'selected="selected"':"";?> value="2006">2006</option>
              <option <?php echo $birth_year == '2005'?'selected="selected"':"";?> value="2005">2005</option>
              <option <?php echo $birth_year == '2004'?'selected="selected"':"";?> value="2004">2004</option>
              <option <?php echo $birth_year == '2003'?'selected="selected"':"";?> value="2003">2003</option>
              <option <?php echo $birth_year == '2002'?'selected="selected"':"";?> value="2002">2002</option>
              <option <?php echo $birth_year == '2001'?'selected="selected"':"";?> value="2001">2001</option>
              <option <?php echo $birth_year == '2000'?'selected="selected"':"";?> value="2000">2000</option>
              <option <?php echo $birth_year == '1999'?'selected="selected"':"";?> value="1999">1999</option>
              <option <?php echo $birth_year == '1998'?'selected="selected"':"";?> value="1998">1998</option>
              <option <?php echo $birth_year == '1997'?'selected="selected"':"";?> value="1997">1997</option>
              <option <?php echo $birth_year == '1996'?'selected="selected"':"";?> value="1996">1996</option>
              <option <?php echo $birth_year == '1995'?'selected="selected"':"";?> value="1995">1995</option>
              <option <?php echo $birth_year == '1994'?'selected="selected"':"";?> value="1994">1994</option>
              <option <?php echo $birth_year == '1993'?'selected="selected"':"";?> value="1993">1993</option>
              <option <?php echo $birth_year == '1992'?'selected="selected"':"";?> value="1992">1992</option>
              <option <?php echo $birth_year == '1991'?'selected="selected"':"";?> value="1991">1991</option>
              <option <?php echo $birth_year == '1990'?'selected="selected"':"";?> value="1990">1990</option>
              <option <?php echo $birth_year == '1989'?'selected="selected"':"";?> value="1989">1989</option>
              <option <?php echo $birth_year == '1988'?'selected="selected"':"";?> value="1988">1988</option>
              <option <?php echo $birth_year == '1987'?'selected="selected"':"";?> value="1987">1987</option>
              <option <?php echo $birth_year == '1986'?'selected="selected"':"";?> value="1986">1986</option>
              <option <?php echo $birth_year == '1985'?'selected="selected"':"";?> value="1985">1985</option>
              <option <?php echo $birth_year == '1984'?'selected="selected"':"";?> value="1984">1984</option>
              <option <?php echo $birth_year == '1983'?'selected="selected"':"";?> value="1983">1983</option>
              <option <?php echo $birth_year == '1982'?'selected="selected"':"";?> value="1982">1982</option>
              <option <?php echo $birth_year == '1981'?'selected="selected"':"";?> value="1981">1981</option>
              <option <?php echo $birth_year == '1980'?'selected="selected"':"";?> value="1980">1980</option>
              <option <?php echo $birth_year == '1979'?'selected="selected"':"";?> value="1979">1979</option>
              <option <?php echo $birth_year == '1978'?'selected="selected"':"";?> value="1978">1978</option>
              <option <?php echo $birth_year == '1977'?'selected="selected"':"";?> value="1977">1977</option>
              <option <?php echo $birth_year == '1976'?'selected="selected"':"";?> value="1976">1976</option>
              <option <?php echo $birth_year == '1975'?'selected="selected"':"";?> value="1975">1975</option>
              <option <?php echo $birth_year == '1974'?'selected="selected"':"";?> value="1974">1974</option>
              <option <?php echo $birth_year == '1973'?'selected="selected"':"";?> value="1973">1973</option>
              <option <?php echo $birth_year == '1972'?'selected="selected"':"";?> value="1972">1972</option>
              <option <?php echo $birth_year == '1971'?'selected="selected"':"";?> value="1971">1971</option>
              <option <?php echo $birth_year == '1970'?'selected="selected"':"";?> value="1970">1970</option>
            </select>
        </td>
      </tr>
      <tr>
        <td colspan="2"><strong>Qualification</strong></td>
      </tr>
      
      <tr>
        <td><label for="pwd">Matriculation</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="lawyers_matric" value="<?php echo $acc_row['lawyers_matric']; ?>"></td>
      </tr>
      
      <tr>
        <td><label for="pwd">Intermediate</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="lawyers_inter" value="<?php echo $acc_row['lawyers_inter']; ?>"></td>
      </tr>
      
      <tr>
        <td><label for="pwd">LLB(hons)</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="lawyers_llb" value="<?php echo $acc_row['lawyers_llb']; ?>"></td>
      </tr>
      
      <tr>
        <td><label for="pwd">LLM</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="lawyers_llm" value="<?php echo $acc_row['lawyers_llm']; ?>"></td>
      </tr>
    
      <tr>
        <td colspan="2"><strong>Area of Work</strong></td>
      </tr>
      
      <tr>
        <td><label for="pwd">City</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="city" value="<?php echo $acc_row['city']; ?>"></td>
      </tr>
      
      <tr>
        <td><label for="pwd">Province</label></td>
        <td><input type="text" class="form-control" id="pwd"  name="province" value="<?php echo $acc_row['province']; ?>"></td>
      </tr>
      
      <tr>
        <td><strong>Proficiency</strong></td>
        <td>
        	<table width="100%">
                <tr>
                  <td><input <?php echo in_array_custom('family',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="family">Family</td>
                  <td><input <?php echo in_array_custom('children',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="children">Children</td>
                  <td><input <?php echo in_array_custom('criminal',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="criminal">Criminal</td>
                </tr>
                <tr>
                  <td><input <?php echo in_array_custom('land',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="land">Land</td>
                  <td><input <?php echo in_array_custom('education',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="education">Eucational</td>
                  <td><input <?php echo in_array_custom('incometax',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="incometax">Income-Tax</td>
                </tr>
                <tr>
                  <td><input <?php echo in_array_custom('islamic',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="islamic">Islamic</td>
                  <td><input <?php echo in_array_custom('labour',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="labour">Labour</td>
                  <td><input <?php echo in_array_custom('antiterrorism',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="antiterrorism">Anti-Terrorism</td>
                </tr>
                <tr>
                  <td><input <?php echo in_array_custom('business',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="business">Business</td>
                  <td><input <?php echo in_array_custom('healthnfood',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="healthnfood">Health And Food</td>
                  <td><input <?php echo in_array_custom('civil-servants-service',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="civil-servants-service">Civial Servent Service</td>
                </tr>
                <tr>
                  <td><input <?php echo in_array_custom('drugsnmedician',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="drugsnmedician">Drugs & Medician</td>
                  <td><input <?php echo in_array_custom('agriculture',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="agriculture">Agricultural</td>
                  <td><input <?php echo in_array_custom('Rent',$profs)?'checked="checked"':""; ?> type="checkbox" name="prof[]" value="rent">Rent</td>
                </tr>
              </table>
        </td>
      </tr>
	  
	  <tr>
	  
        <td><label for="pwd">Job Experience</label></td>
        <td>
			<select name="lawyers_experience" required>
				  <option value="">Years</option>
				  <option value="one" <?php echo $acc_row['lawyers_experience'] == 'one'?'selected="selected"':""?>>1</option>
				  <option value="two" <?php echo $acc_row['lawyers_experience'] == 'two'?'selected="selected"':""?>>2</option>
				  <option value="three" <?php echo $acc_row['lawyers_experience'] == 'three'?'selected="selected"':""?>>3</option>
				  <option value="four" <?php echo $acc_row['lawyers_experience'] == 'four'?'selected="selected"':""?>>4</option>
				  <option value="five" <?php echo $acc_row['lawyers_experience'] == 'five'?'selected="selected"':""?>>5</option>
				  <option value="six" <?php echo $acc_row['lawyers_experience'] == 'six'?'selected="selected"':""?>>6</option>
				  <option value="seven" <?php echo $acc_row['lawyers_experience'] == 'seven'?'selected="selected"':""?>>7</option>
				  <option value="eight" <?php echo $acc_row['lawyers_experience'] == 'eight'?'selected="selected"':""?>>8</option>
				  <option value="nine" <?php echo $acc_row['lawyers_experience'] == 'nine'?'selected="selected"':""?>>9</option>
				  <option value="ten" <?php echo $acc_row['lawyers_experience'] == 'ten'?'selected="selected"':""?>>10</option>
				  <option value="eleven" <?php echo $acc_row['lawyers_experience'] == 'eleven'?'selected="selected"':""?>>11</option>
				  <option value="twelve" <?php echo $acc_row['lawyers_experience'] == 'twelve'?'selected="selected"':""?>>12</option>
				  <option value="thirteen" <?php echo $acc_row['lawyers_experience'] == 'thirteen'?'selected="selected"':""?>>13</option>
				  <option value="fourteen" <?php echo $acc_row['lawyers_experience'] == 'fourteen'?'selected="selected"':""?>>14</option>
				  <option value="fifteen" <?php echo $acc_row['lawyers_experience'] == 'fifteen'?'selected="selected"':""?>>15</option>
				  <option value="fifteen+" <?php echo $acc_row['lawyers_experience'] == 'fifteen+'?'selected="selected"':""?>>Other..</option>
			 </select>
		</td>
      </tr>
      
      <tr>
        <td colspan="2"><strong>License Info</strong></td>
      </tr>
	  
	  <tr>
        <td>Licence No.</td>
		<td>
			<input type="text" required class="form-control" name="lawyers_licenceno" value="<?php echo $acc_row['lawyers_licenceno']; ?>" placeholder="Licence #" required>
		</td>
      </tr>
	  
	  <tr>
        <td>Issue Date</td>
		<td>
			<?php
				$llid = $acc_row['lawyers_lissue'];
				$llid_array = explode("-",$llid);
				$lli_date = $llid_array[0];
				$lli_month = $llid_array[1];
				$lli_year = $llid_array[2];
			?>
			<select name="day_issue" required>
			  <option value="">Day</option>
			  <option <?php echo $lli_date == '1'?'selected="selected"':""; ?> value="1">1</option>
			  <option <?php echo $lli_date == '2'?'selected="selected"':""; ?> value="2">2</option>
			  <option <?php echo $lli_date == '3'?'selected="selected"':""; ?> value="3">3</option>
			  <option <?php echo $lli_date == '4'?'selected="selected"':""; ?> value="4">4</option>
			  <option <?php echo $lli_date == '5'?'selected="selected"':""; ?> value="5">5</option>
			  <option <?php echo $lli_date == '6'?'selected="selected"':""; ?> value="6">6</option>
			  <option <?php echo $lli_date == '7'?'selected="selected"':""; ?> value="7">7</option>
			  <option <?php echo $lli_date == '8'?'selected="selected"':""; ?> value="8">8</option>
			  <option <?php echo $lli_date == '9'?'selected="selected"':""; ?> value="9">9</option>
			  <option <?php echo $lli_date == '10'?'selected="selected"':""; ?> value="10">10</option>
			  <option <?php echo $lli_date == '11'?'selected="selected"':""; ?> value="11">11</option>
			  <option <?php echo $lli_date == '12'?'selected="selected"':""; ?> value="12">12</option>
			  <option <?php echo $lli_date == '13'?'selected="selected"':""; ?> value="13">13</option>
			  <option <?php echo $lli_date == '14'?'selected="selected"':""; ?> value="14">14</option>
			  <option <?php echo $lli_date == '15'?'selected="selected"':""; ?> value="15">15</option>
			  <option <?php echo $lli_date == '16'?'selected="selected"':""; ?> value="16">16</option>
			  <option <?php echo $lli_date == '17'?'selected="selected"':""; ?> value="17">17</option>
			  <option <?php echo $lli_date == '18'?'selected="selected"':""; ?> value="18">18</option>
			  <option <?php echo $lli_date == '19'?'selected="selected"':""; ?> value="19">19</option>
			  <option <?php echo $lli_date == '20'?'selected="selected"':""; ?> value="20">20</option>
			  <option <?php echo $lli_date == '21'?'selected="selected"':""; ?> value="21">21</option>
			  <option <?php echo $lli_date == '22'?'selected="selected"':""; ?> value="22">22</option>
			  <option <?php echo $lli_date == '23'?'selected="selected"':""; ?> value="23">23</option>
			  <option <?php echo $lli_date == '24'?'selected="selected"':""; ?> value="24">24</option>
			  <option <?php echo $lli_date == '25'?'selected="selected"':""; ?> value="25">25</option>
			  <option <?php echo $lli_date == '26'?'selected="selected"':""; ?> value="26">26</option>
			  <option <?php echo $lli_date == '27'?'selected="selected"':""; ?> value="27">27</option>
			  <option <?php echo $lli_date == '28'?'selected="selected"':""; ?> value="28">28</option>
			  <option <?php echo $lli_date == '29'?'selected="selected"':""; ?> value="29">29</option>
			  <option <?php echo $lli_date == '30'?'selected="selected"':""; ?> value="30">30</option>
			  <option <?php echo $lli_date == '31'?'selected="selected"':""; ?> value="31">31</option>
			</select>
			<select name="month_issue" id="month_issue" required>
			  <option value="">Month</option>
			  <option <?php echo $lli_month == 'Jan'?'selected="selected"':""; ?> value="Jan">Jan</option>
			  <option <?php echo $lli_month == 'Feb'?'selected="selected"':""; ?> value="Feb">Feb</option>
			  <option <?php echo $lli_month == 'Mar'?'selected="selected"':""; ?> value="Mar">Mar</option>
			  <option <?php echo $lli_month == 'Apr'?'selected="selected"':""; ?>value="Apr">Apr</option>
			  <option <?php echo $lli_month == 'May'?'selected="selected"':""; ?> value="May">May</option>
			  <option <?php echo $lli_month == 'Jun'?'selected="selected"':""; ?> value="Jun">Jun</option>
			  <option <?php echo $lli_month == 'Jul'?'selected="selected"':""; ?> value="Jul">Jul</option>
			  <option <?php echo $lli_month == 'Aug'?'selected="selected"':""; ?> value="Aug">Aug</option>
			  <option <?php echo $lli_month == 'Sep'?'selected="selected"':""; ?> value="Sep">Sep</option>
			  <option <?php echo $lli_month == 'Oct'?'selected="selected"':""; ?> value="Oct">Oct</option>
			  <option <?php echo $lli_month == 'Nov'?'selected="selected"':""; ?> value="Nov">Nov</option>
			  <option <?php echo $lli_month == 'Dec'?'selected="selected"':""; ?> value="Dec">Dec</option>
			</select>
			<select name="year_issue" id="year_issue" required>
			  <option value="">Year</option>
			  <option <?php echo $lli_year == '2018'?'selected="selected"':""; ?> value="2018">2018</option>
			  <option <?php echo $lli_year == '2017'?'selected="selected"':""; ?> value="2017">2017</option>
			  <option <?php echo $lli_year == '2016'?'selected="selected"':""; ?> value="2016">2016</option>
			  <option <?php echo $lli_year == '2015'?'selected="selected"':""; ?> value="2015">2015</option>
			  <option <?php echo $lli_year == '2014'?'selected="selected"':""; ?> value="2014">2014</option>
			  <option <?php echo $lli_year == '2015'?'selected="selected"':""; ?> value="2015">2015</option>
			  <option <?php echo $lli_year == '2014'?'selected="selected"':""; ?> value="2014">2014</option>
			  <option <?php echo $lli_year == '2013'?'selected="selected"':""; ?> value="2013">2013</option>
			  <option <?php echo $lli_year == '2012'?'selected="selected"':""; ?> value="2012">2012</option>
			  <option <?php echo $lli_year == '2011'?'selected="selected"':""; ?> value="2011">2011</option>
			  <option <?php echo $lli_year == '2010'?'selected="selected"':""; ?> value="2010">2010</option>
			  <option <?php echo $lli_year == '2009'?'selected="selected"':""; ?> value="2009">2009</option>
			  <option <?php echo $lli_year == '2008'?'selected="selected"':""; ?> value="2008">2008</option>
			  <option <?php echo $lli_year == '2007'?'selected="selected"':""; ?> value="2007">2007</option>
			  <option <?php echo $lli_year == '2006'?'selected="selected"':""; ?> value="2006">2006</option>
			  <option <?php echo $lli_year == '2005'?'selected="selected"':""; ?> value="2005">2005</option>
			  <option <?php echo $lli_year == '2004'?'selected="selected"':""; ?> value="2004">2004</option>
			  <option <?php echo $lli_year == '2003'?'selected="selected"':""; ?> value="2003">2003</option>
			  <option <?php echo $lli_year == '2002'?'selected="selected"':""; ?> value="2002">2002</option>
			  <option <?php echo $lli_year == '2001'?'selected="selected"':""; ?> value="2001">2001</option>
			  <option <?php echo $lli_year == '2000'?'selected="selected"':""; ?> value="2000">2000</option>
			  <option <?php echo $lli_year == '1999'?'selected="selected"':""; ?> value="1999">1999</option>
			  <option <?php echo $lli_year == '1998'?'selected="selected"':""; ?> value="1998">1998</option>
			  <option <?php echo $lli_year == '1997'?'selected="selected"':""; ?> value="1997">1997</option>
			  <option <?php echo $lli_year == '1996'?'selected="selected"':""; ?> value="1996">1996</option>
			  <option <?php echo $lli_year == '1995'?'selected="selected"':""; ?> value="1995">1995</option>
			  <option <?php echo $lli_year == '1994'?'selected="selected"':""; ?> value="1994">1994</option>
			  <option <?php echo $lli_year == '1993'?'selected="selected"':""; ?> value="1993">1993</option>
			  <option <?php echo $lli_year == '1992'?'selected="selected"':""; ?> value="1992">1992</option>
			  <option <?php echo $lli_year == '1991'?'selected="selected"':""; ?> value="1991">1991</option>
			  <option <?php echo $lli_year == '1990'?'selected="selected"':""; ?> value="1990">1990</option>
			  <option <?php echo $lli_year == '1989'?'selected="selected"':""; ?> value="1989">1989</option>
			  <option <?php echo $lli_year == '1988'?'selected="selected"':""; ?> value="1988">1988</option>
			  <option <?php echo $lli_year == '1987'?'selected="selected"':""; ?> value="1987">1987</option>
			  <option <?php echo $lli_year == '1986'?'selected="selected"':""; ?> value="1986">1986</option>
			  <option <?php echo $lli_year == '1985'?'selected="selected"':""; ?> value="1985">1985</option>
			  <option <?php echo $lli_year == '1984'?'selected="selected"':""; ?> value="1984">1984</option>
			  <option <?php echo $lli_year == '1983'?'selected="selected"':""; ?> value="1983">1983</option>
			  <option <?php echo $lli_year == '1982'?'selected="selected"':""; ?> value="1982">1982</option>
			  <option <?php echo $lli_year == '1981'?'selected="selected"':""; ?> value="1981">1981</option>
			  <option <?php echo $lli_year == '1980'?'selected="selected"':""; ?> value="1980">1980</option>
			</select>
		</td>
      </tr>
	  
	  <tr>
        <td>Expiry Date</td>
		<td>
			<?php
				$lled = $acc_row['lawyers_lexpire'];
				$lled_array = explode("-",$lled);
				$lle_date = $lled_array[0];
				$lle_month = $lled_array[1];
				$lle_year = $lled_array[2];
			?>
			<select name="day_expire" required>
			  <option value="">Day</option>
			  <option <?php echo $lle_date == '1'?'selected="selected"':""; ?> value="1">1</option>
			  <option <?php echo $lle_date == '2'?'selected="selected"':""; ?> value="2">2</option>
			  <option <?php echo $lle_date == '3'?'selected="selected"':""; ?> value="3">3</option>
			  <option <?php echo $lle_date == '4'?'selected="selected"':""; ?> value="4">4</option>
			  <option <?php echo $lle_date == '5'?'selected="selected"':""; ?> value="5">5</option>
			  <option <?php echo $lle_date == '6'?'selected="selected"':""; ?> value="6">6</option>
			  <option <?php echo $lle_date == '7'?'selected="selected"':""; ?> value="7">7</option>
			  <option <?php echo $lle_date == '8'?'selected="selected"':""; ?> value="8">8</option>
			  <option <?php echo $lle_date == '9'?'selected="selected"':""; ?> value="9">9</option>
			  <option <?php echo $lle_date == '10'?'selected="selected"':""; ?> value="10">10</option>
			  <option <?php echo $lle_date == '11'?'selected="selected"':""; ?> value="11">11</option>
			  <option <?php echo $lle_date == '12'?'selected="selected"':""; ?> value="12">12</option>
			  <option <?php echo $lle_date == '13'?'selected="selected"':""; ?> value="13">13</option>
			  <option <?php echo $lle_date == '14'?'selected="selected"':""; ?> value="14">14</option>
			  <option <?php echo $lle_date == '15'?'selected="selected"':""; ?> value="15">15</option>
			  <option <?php echo $lle_date == '16'?'selected="selected"':""; ?> value="16">16</option>
			  <option <?php echo $lle_date == '17'?'selected="selected"':""; ?> value="17">17</option>
			  <option <?php echo $lle_date == '18'?'selected="selected"':""; ?> value="18">18</option>
			  <option <?php echo $lle_date == '19'?'selected="selected"':""; ?> value="19">19</option>
			  <option <?php echo $lle_date == '20'?'selected="selected"':""; ?> value="20">20</option>
			  <option <?php echo $lle_date == '21'?'selected="selected"':""; ?> value="21">21</option>
			  <option <?php echo $lle_date == '22'?'selected="selected"':""; ?> value="22">22</option>
			  <option <?php echo $lle_date == '23'?'selected="selected"':""; ?> value="23">23</option>
			  <option <?php echo $lle_date == '24'?'selected="selected"':""; ?> value="24">24</option>
			  <option <?php echo $lle_date == '25'?'selected="selected"':""; ?> value="25">25</option>
			  <option <?php echo $lle_date == '26'?'selected="selected"':""; ?> value="26">26</option>
			  <option <?php echo $lle_date == '27'?'selected="selected"':""; ?> value="27">27</option>
			  <option <?php echo $lle_date == '28'?'selected="selected"':""; ?> value="28">28</option>
			  <option <?php echo $lle_date == '29'?'selected="selected"':""; ?> value="29">29</option>
			  <option <?php echo $lle_date == '30'?'selected="selected"':""; ?> value="30">30</option>
			  <option <?php echo $lle_date == '31'?'selected="selected"':""; ?> value="31">31</option>
			</select>
			<select name="month_expire" id="month_issue" required>
			  <option value="">Month</option>
			  <option <?php echo $lle_month == 'Jan'?'selected="selected"':""; ?> value="Jan">Jan</option>
			  <option <?php echo $lle_month == 'Feb'?'selected="selected"':""; ?> value="Feb">Feb</option>
			  <option <?php echo $lle_month == 'Mar'?'selected="selected"':""; ?> value="Mar">Mar</option>
			  <option <?php echo $lle_month == 'Apr'?'selected="selected"':""; ?>value="Apr">Apr</option>
			  <option <?php echo $lle_month == 'May'?'selected="selected"':""; ?> value="May">May</option>
			  <option <?php echo $lle_month == 'Jun'?'selected="selected"':""; ?> value="Jun">Jun</option>
			  <option <?php echo $lle_month == 'Jul'?'selected="selected"':""; ?> value="Jul">Jul</option>
			  <option <?php echo $lle_month == 'Aug'?'selected="selected"':""; ?> value="Aug">Aug</option>
			  <option <?php echo $lle_month == 'Sep'?'selected="selected"':""; ?> value="Sep">Sep</option>
			  <option <?php echo $lle_month == 'Oct'?'selected="selected"':""; ?> value="Oct">Oct</option>
			  <option <?php echo $lle_month == 'Nov'?'selected="selected"':""; ?> value="Nov">Nov</option>
			  <option <?php echo $lle_month == 'Dec'?'selected="selected"':""; ?> value="Dec">Dec</option>
			</select>
			<select name="year_expire" id="year_issue" required>
			  <option value="">Year</option>
			  <option <?php echo $lle_year == '2018'?'selected="selected"':""; ?> vvalue="2018">2018</option>
			  <option <?php echo $lle_year == '2019'?'selected="selected"':""; ?> vvalue="2019">2019</option>
			  <option <?php echo $lle_year == '2020'?'selected="selected"':""; ?> vvalue="2020">2020</option>
			  <option <?php echo $lle_year == '2021'?'selected="selected"':""; ?> vvalue="2021">2021</option>
			  <option <?php echo $lle_year == '2022'?'selected="selected"':""; ?> vvalue="2022">2022</option>
			  <option <?php echo $lle_year == '2023'?'selected="selected"':""; ?> vvalue="2023">2023</option>
			  <option <?php echo $lle_year == '2024'?'selected="selected"':""; ?> vvalue="2024">2024</option>
			  <option <?php echo $lle_year == '2025'?'selected="selected"':""; ?> vvalue="2025">2025</option>
			</select>
		</td>
      </tr>
	  
	  <tr>
        
      </tr>
      
      <tr>
        <td></td>
        <td>
		<input type='hidden' name='account_submit' value='Yes' />
		<button type="submit" class="btn btn-default">Save</button>
		</td>
      </tr>
      
      </form>
</table>
<hr>

  <!--<a href="#">Remove my account</a>-->
    

</body>
</html>
