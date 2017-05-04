<?php
include_once('db.php');
$_SESSION['message']='';
if ($_SERVER['REQUEST_METHOD']== 'POST'){
      //two passwords equal to each other 
      if($_POST['password']==$_POST['password2']){

            $email=$mysqli->real_escape_string($_POST['email']);
            $password= md5($_POST['password']);
            $password2= md5($_POST['password2']);

      }
      if (mysql_query($query,$ak798)== true){
            $_SESSION['message']="Registation succesful! Added user name to database!";
            header("LOCATION:welcome.php");

      }
      else{
            $_SESSION['message']="User could not added to the database";
      }
      }
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<h2><b>Registration Page</b></h2>
<form action="todo.php" method="post">
<fieldset>
      <center><legend><b>Sign Up!!</b></legend>
      <p><label class="field" for=First>First Name: <input type="text" name="fname" /></p>
      <p><label class="field" for=Last>Last Name: <input type="text" name="lname" /></p>
      <p><label class="field" for=Email>Email: <input type="text" name="email" required /></p>
      <p><label class="field" for=Phone>Phone: <input type="number" name="pnumber" /></p>
      <p><label class="field" for=Birthday>Birthday: <input type="date" name="birthday" required /></p>
      <p><label class="control-label" for=Gender>Gender<select name="gender"> <option value=""></option> <option value="Male">Male</option><option value="Female">Fermale</option>
      </select>
      <p><label class="field" for=Password>Password: <input type="password" name="password" /></p>
      <p><label class="field" for=Confirm_Password>Confirm_Password<input type="password" name="password2" /></p>
      <a href="https://web.njit.edu/~ak798/final/index.php"><input type="submit" class="btn btn-primary" value="Sign Up!">
      </center>
      <a href="https://web.njit.edu/~ak798/final/index.php"><input type="submit" name="btn btn-primary" value="Home">
</fieldset>
</form>
</body>
</html>
