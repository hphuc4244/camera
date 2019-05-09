<?php
	session_start();
	if(isset($_GET['logout']))
	{
		session_destroy();
		header("location:http://ec2-18-188-71-150.us-east-2.compute.amazonaws.com/Login.php");
	}
	
?>