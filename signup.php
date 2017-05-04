<?php

include_once('db.php');
( $dbh = mysql_connect ( $hostname, $username, $password ) )
	        or die ( "Unable to connect to MySQL database" );
//print "Added Register<br>";
mysql_select_db("ak798", $dbh ); 


$fname= $_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pnumber=$_POST['pnumber'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$password=$_POST['password'];



//$query = mysql_query("INSERT INTO user (First, Last, Email, Phone, Birthday, Gender, Password, Confirm_Password) VALUES('$fname','$lname','$email','$pnumber','$birthday','$gender','$password','password2')");
$query = mysql_query("INSERT INTO user (First, Email) VALUES(".$fname.",".$email.")");
//$statement = $db->prepare($query);
//$statement->execute();
//$statement->closeCursor(); 


if (!mysql_query($query,$ak798))
  {
  die('Welcome!! ' . mysql_error());
  }

// Close connection
mysql_close($dbh);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<h3>Welcome!!</h3><p> Now you can go to the login page and use the email address and password used 
while registering</p>
<a href="https://web.njit.edu/~ak798/final/index.php">SIGN UP!!
</body>
</html>

</body>
</html>

