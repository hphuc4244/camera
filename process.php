<?php

	$con = new mysqli('localhost','root','123456','qlkhuonmat');
	session_start();
	if (isset($_POST['login']))
	{
		if(empty($_POST['usr'])|| empty($_POST['pass']))
		{
			
		}
		else
		{
			$sql = "select * from nguoidangky where MaSo = ".$_POST['usr']." and MatKhau = '".$_POST['pass']."'";
			$result = $con->query($sql);
			if ($result->num_rows > 0)
			{
				
						$_SESSION['User']=$_POST['usr'];
						header("location:http://ec2-18-188-71-150.us-east-2.compute.amazonaws.com/webcam.php");
					
				
			}
			else
			{
				header("location:Login.php?Invalid=Please Enter");
			}
		}
	}
	mysqli_close($con);
?>
