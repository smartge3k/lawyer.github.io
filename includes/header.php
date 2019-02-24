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
        <a class="dropdown-item" href="topics/alltopics.php">Others..</a>
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
      <a class="nav-link" href="talktolawyer.php">Talk to Lawyer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="signin.php"><span class="glyphicon glyphicon-user">Sign in</span></a>
    </li>
        
          <form class="form-inline my-2 my-lg-0" action='search_results.php' method='post'>
            <input class="form-control mr-sm-2" type="text" name="header_search_str" placeholder="Search" value="<?php echo isset($_POST['header_search_str'])?$_POST['header_search_str']:""; ?>">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <input name='header_search' type="hidden" value="Yes">
            <input name='search_submit' type="hidden" value="Yes">
          </form>
  </ul>
</nav>