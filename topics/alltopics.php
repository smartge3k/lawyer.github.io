<!DOCTYPE html>
<html lang="en">
<head>
  <title>alllaws</title>
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

    .container{
      padding-top: 40px;
    }

    
  </style>
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <!-- Brand -->
  <a class="navbar-brand" href="../index.php">goLegal</a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Lawyer Directory
      </a>
      <div class="dropdown-content">
        <a class="dropdown-item" href="../directory/islamic/islamiclaws.php">Islamic Laws</a>
        <a class="dropdown-item" href="../directory/family/familylaws.php">Family Laws</a>
        <a class="dropdown-item" href="../directory/land/landlaws.php">Land Laws</a>
        <a class="dropdown-item" href="../directory/education/educationlaws.php">Education Laws</a>
        <a class="dropdown-item" href="../directory/labour/labourlaws.php">Labour Laws</a>
        <a class="dropdown-item" href="../directory/business/businesslaws.php">Business Laws</a>
        <a class="dropdown-item" href="../directory/civilservantsservice/civil-servants-servicelaws.php">Civil Servants Service Laws</a>
        <a class="dropdown-item" href="../directory/healthandfood/health&foodlaws.php">Health & Food Laws</a>
        <a class="dropdown-item" href="../directory/anti-terrorism/anti-terrorismlaws.php">Anti-Terrorism Laws</a>
        <a class="dropdown-item" href="../directory/incometax/incometaxlaws.php">Income Tax Laws</a>
        <a class="dropdown-item" href="../directory/alllaws.php">Others..</a>
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
      <a class="nav-link" href="../talktolawyer.php">Talk to Lawyer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../signin.php"><span class="glyphicon glyphicon-user">Sign in</span></a>
    </li>
        
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
  </ul>
</nav>

      <div class="container">
          <h1><center><u><font color="#ff4c1a">ALL TOPICS</font></u></center></h1><br>

          <div class="row">

            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">A</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Arbitration_in_Illegal_Contracts.pdf">Arbitration in Illegal Contracts</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/AN_ABSTRACT_ON_RELIGION_AND_FUNDAMENTAL_RIGHTS_IN_CONSTITUTIONS.pdf">An Abstract on Religion and Fundamental Rights in Constitutions</a></li>
              </ul>
            </div>


            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">B</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Bank_Account_by_Minors_1.pdf">Bank Account by Minors</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/BANKING_RECOVERY_LAW_0.pdf">Banking Recovery Law</a></li>
              </ul>

              
            </div>
            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">C</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Probation_0.pdf">Concept of Community Service As An Alternative Sentence Under Probation of Offenders Ordinance, 1960</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Compounding_of_Death_Sentence_Awarded_by_Way_of_Qisas.pdf">Compounding of Death Sentence Awarded by way of Qisas and Ta'zir - Legal Implication</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Cyber_Laws_in_Pakistan_Justice_%28R%29_Khalil_ur_Rehman_Khan.pdf">Cyber Laws in Pakistan</a></li>
              </ul>
            </div>

          </div><hr>

          <div class="row">

            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">D</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Does_Competition_Ordinance_Result_In_Consumer_Protection_0.pdf">Does Competition Ordinance Result in Consumer Protection</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Dishonouring_of_Bank_Cheque-2_0_0.pdf">Dishonoring of a Bank Cheque</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/ARTICLE_DISPUTE_RESOLUTION_IN_ISLAMIC_FINANCIAL_CONTRACTS_%28MODIFIED%29_%282%29.pdf">Dispute Resolution in Islamic Financial Contracts of Islamic Financial Institutions-Issues</a></li>
              </ul>
            </div>


            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">E</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Environmental_Law_0.pdf">Environmental Law</a></li>
              </ul>

              
            </div>
            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">F</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Features_of_Financial_Institutions_%28Recovery_of_Finance%29_Ordinance_2001.pdf">Features of Financial Institutions (Recovery of Finance) Ordinance, 2001</a></li>
              </ul>
            </div>

          </div><hr>

          <div class="row">

            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">I</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/JJSO_0.pdf">Introduction to Local Laws related to Children Matters</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Innovation_in_Legal_Education_0.pdf">Innovations in Legal Education</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Inherent_Jurisdiction_0.pdf">Inherent Jurisdiction</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Implications_of_Policy_Shift_from_Islamization_amended.pdf">Implications of Policy Shift from Islamization amended</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Islam_Constitution_and_Sufi_Muhammad.pdf">Islam, Constitution and Sufi Muhammad</a></li>
              </ul>
            </div>


            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">J</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Jurisprudence_of_Prisoners_Rights_0.pdf">Jurisprudence of Prisoners' Rights</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Judgement_Writing_2.pdf">Judgments on Judgment Writing</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Justice%20delayed%20is%20justice%20denied_0.pdf">Justice Delayed is Justice Denied</a></li>
              </ul>

              
            </div>
            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">L</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Legal_and_Corporate_Fiction_0.pdf">Legal and Corporate Fiction</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Legal_Status_of_Mercenaries_%28Blackwater%29.pdf">Legal Status of Mercenaries (Blackwater)</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Legal_Fiction_3.pdf">Legal Fiction</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Legal_Presumption.pdf">Legal Presumptions</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Legal_Frame_Work%2C_Principle_of_Shariah.pdf">Legal Frame Work, Principle of Shariah</a></li>
              </ul>
            </div>

          </div><hr>


          <div class="row">

            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">M</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/MANDATORY_AND_DIRECTORY_PROVISIONS_IN_A_STATUTE_%28Word%29_0.pdf">Mandatory and Directory Provisions in a Statute (Slides)</a></li>
              </ul>
            </div>


            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">N</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Nexus_Between_Human_Rights_And_Corruption.pdf">Nexus between Human Rights and Corruption according to U.N.</a></li>
              </ul>

              
            </div>
            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a"></font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Operationalization_of_Small_Claims_and_Minor_Offences_Courts_Ordinance.pdf">Operationalization of Small Claims and Minor Offences Courts Ordinance, 2002</a></li>
              </ul>
            </div>

          </div><hr>

          <div class="row">

            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">P</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Pakistan_a_secular_State_0.pdf">Pakistan - A Secular State</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/ParametersRestraints_of_Public_Prosecutor_during_police_investigation.pdf">Parameters/Restraints of Public Prosecutor during Police Investigation</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Piercing_Through_Corporate_Veil.pdf">Piercing through Corporate Veil</a></li>
              </ul>
            </div>


            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">R</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Role_of_Prosecutor_0.pdf">Role of Prosecutor</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Sharia_Basis_of_Constitution.pdf">Religion and the Sources of Law Shari'a in Constitutions</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Remand_of_Civil_Cases.pdf">Remand of Civil Cases</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Regilion_and_Fundamental_Rights.pdf">Regilion and Fundamental Rights in the Constitutions</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/REPORT_ON_RELIGIOUS_EDUCATION_IN_PAKISTAN_17.12.2011.pdf">Report on Religious Education in Pakistan 17.12.2011</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Revised_Death_Sentence_draft.pdf">Revised Death Sentence Draft</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/REPORT_JUDICIAL_REFORMS.pdf">Report on Judicial Reforms</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Resolving_Kashmir_Dispute_Under_International_Law.pdf">Resolving Kashmir Dispute Under International Law</a></li>
              </ul>

              
            </div>
            <div class="col-footer col-md-4 col-xs-6">
              <h4><u><font color="#ff4c1a">S</font></u></h4>
              <ul>
                <li><a href="http://www.pja.gov.pk/system/files/Standard_Minimum_Rules_for_Prisoners_0.pdf">Standard Minimum Rules for the Treatment of Prisoners</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Some_Legal_Aspects_of_Bank_Guarantee.pdf">Some Legal Aspects of Bank Guarantee</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Statute_Interpretation.pdf">Statute Interpretation</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/STANDARD_MINIMUM_RULES_FOR_PRISONERS.pdf">Standard Minimum Rules for the Treatment of Prisoners</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Shariah_Standardisation.pdf">Shariah Standardisation</a></li>
                <li><a href="http://www.pja.gov.pk/system/files/Social_Justice_in_Islam-Article.pdf">Social Justice in Islam</a></li>
              </ul>
            </div>

          </div><hr>

      </div>
    

 <!-- Footer -->

  <?php  require_once('../includes/footer.php'); 
        require_once('../includes/head.php');
  ?>
     
</body>
</html>
