<!DOCTYPE html>
<html>
<head>
	<title>
		Home
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<style media="screen">
		#login{
			font-size: 18px;
			color: #000000;
			text-decoration: None;
			font-weight: bold;
			position: absolute;
  		right: 20px;
		}
	</style>
</head>
<body>
	<div id="header">
		<h1 id="logo">Test</h1>
		<?php
			session_start();
			if(isset($_SESSION['loginuser'])){
				echo "<a href='logout.php' id='login'>User: ".$_SESSION['loginuser']."</a>";
			}
			else{
				echo "<a href='signup.php' id='login'>Login</a>";
			}
		 ?>

	</div>
