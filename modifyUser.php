<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
	include_once 'db.php';
	

	//Let's make sure the correct data is received. 
	if (!isset($_REQUEST['email']) || !isset($_REQUEST['fname']) || !isset($_REQUEST['lname'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was missing.");
	}
	else if ($_REQUEST['email'] == null || $_REQUEST['fname'] == null || $_REQUEST['lname'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was blank.<br><a href='index.php'>Go back to main page.</a>");
	}

	
	$$fname= $_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pnumber=$_POST['pnumber'];
	$birthday=$_POST['birthday'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];



	//Let's make sure the e-mail exists (so we can modify it).
	$sql = 'SELECT * FROM user WHERE email="'.$email.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail exists.
	if (count($results) == 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address doesn't exist.<br><a href='index.php'>Go back to main page.</a>");
	}

	//Let's update the entry
	$sql = 'UPDATE user SET fname="'.$firstname.'", lname="'.$lastname.'" WHERE email ="'.$email.'"';
	$results = runQuery($sql);
	
	echo "User Updated.";

?>

	<div>
		<a href="index.php">Go back to main page.</a>
	</div>

</body>
</html>