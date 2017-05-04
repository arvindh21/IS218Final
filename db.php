<?php
    $hostname = 'sql1.njit.edu';
    $username = 'ak798';
    $password = 'uvASCprF';
    $database = 'ak798';
    
	/**
	try 
	
	{
        
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('db_error.php');
        exit();
    }
	*/
?>