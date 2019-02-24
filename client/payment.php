<?php
   session_start();  

?>

<!DOCTYPE html>
<html lang="en">
<title>myAccount</title>
<?php  require_once('include/dashhead.php'); 
  ?>

  
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

<?php  require_once('include/dashheader.php'); 
  ?>

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
      <h4>Paid</h4>
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
