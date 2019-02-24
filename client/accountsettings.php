
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
  <h2>Account</h2>
  <p>Change your basis account settings.</p><hr>


<table>
      <tr>
        <td><label for="name">Username</label></td>
        <td><input type="text" class="form-control" id="name"  name="name"></td>
      </tr>

      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="email" class="form-control" id="email"  name="email"></td>
      </tr>

      <tr>
        <td><label for="pwd">Old Password</label></td>
        <td><input type="password" class="form-control" id="pwd"  name="pwd"></td>
      </tr>

      <tr>
        <td><label for="pwd">New Password</label></td>
        <td><input type="password" class="form-control" id="pwd"  name="pwd"></td>
      </tr>
    
      <tr>
        <td></td>
        <td><button type="submit" class="btn btn-default">Save</button></td>
      </tr>
</table>
<hr>

  <a href="#">Remove my account</a>
    

</body>
</html>
