<?php
   session_start();  

?>

<!DOCTYPE html>
<html lang="en">
<title>myAccount</title>
<?php  require_once('include/dashhead.php'); 
  ?>



<body>

<?php  require_once('include/dashheader.php'); 
  ?>
  


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
