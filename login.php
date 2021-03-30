<?php
include('logincheck.php');

if(isset($_SESSION['username']) ){
  
   header("location: loginsuccess.html");
  

} 
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>



<h1>Welcome</h1>
<h2>LOGIN</h2>
<form action="" method="post">
    <p><input type="text" name="username" placeholder="Enter your username" required></p>
    <p><input type="password" name="password" placeholder="Enter your password" required></p>
    <fieldset>
<legend align="middle">Login Type</legend>
</tr>

  <input type="radio" id="admin" name="type" value="admin"required>
  <label for="admin">Admin</label>
  <input type="radio" id="buyer" name="type" value="buyer"required>
  <label for="buyer">Buyer</label>
  <input type="radio" id="seller" name="type" value="seller"required>
  <label for="other">Seller</label>
  <input type="radio" id="dguy" name="type" value="dguy">
  <label for="dguy">Delivery Guy</label>

</fieldset>
    <p><input  name="login" type="submit" value="LOGIN"></p>
</form>
<br>
<h3>Don't you have an account?</h3> 
<p><a href="RegistrationForm.php">REGISTRATION</a></p
>



<br>
<?php echo $error; ?>

</body>
</html>
