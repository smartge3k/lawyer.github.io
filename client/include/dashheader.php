
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
      <li><a href="../signin.php"><span class="fa fa-sign-out"></span>Signout</a></li>
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
            <a class="dropdown-item" href="http://www.academia.edu/21133587/Woman_status_in_Islam_with_reference_to_marriage_and_divorce">Woman Status in Islam..</a>
            <a class="dropdown-item" href="http://www.pja.gov.pk/system/files/JJSO_0.pdf">Introduction to Local Laws...</a>
            <a class="dropdown-item" href="http://www.pja.gov.pk/system/files/Environmental_Law_0.pdf">Environmental Protection..</a>
            <a class="dropdown-item" href="http://www.pja.gov.pk/system/files/Cyber_Laws_in_Pakistan_Justice_%28R%29_Khalil_ur_Rehman_Khan.pdf">Cyber Laws in Pak..</a>
            <a class="dropdown-item" href="http://www.pja.gov.pk/system/files/Jurisprudence_of_Prisoners_Rights_0.pdf">Jurisprudence Of Prisoners' Ri..</a>
            <a class="dropdown-item" href="http://www.pja.gov.pk/system/files/Social_Justice_in_Islam-Article.pdf">Social Justice in Islam</a>
            <a class="dropdown-item" href="http://www.pja.gov.pk/system/files/AN_ABSTRACT_ON_RELIGION_AND_FUNDAMENTAL_RIGHTS_IN_CONSTITUTIONS.pdf">An Abstract on Religion &..</a>
            <a class="dropdown-item" href="http://www.pja.gov.pk/system/files/Dishonouring_of_Bank_Cheque-2_0_0.pdf">Dishonoring of a Bank Cheque</a>
            <a class="dropdown-item" href="http://www.pja.gov.pk/system/files/Innovation_in_Legal_Education_0.pdf">Innovations in Legal Education</a>
            <a class="dropdown-item" href="http://www.pja.gov.pk/system/files/Remand_of_Civil_Cases.pdf">Remand of Civil Cases</a>
            <a class="dropdown-item" href="../topics/alltopics.php">Others..</a>
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
