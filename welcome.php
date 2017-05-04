<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
<?php session_start();?>
<div clas="body content">
	<div class="welcome">
		<div class="Success"><?= $_SESSION['message']?></div>
		Welcome to <span class="user>"
