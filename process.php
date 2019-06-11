<?php

	$con = new mysqli('localhost','root','123456','qlkhuonmat');
	session_start();
	if (isset($_POST['login']))
	{
		if(empty($_POST['usr'])|| empty($_POST['pass']))
		{
			header("location:ad.php");
		}
		else
		{	
			if(($_POST['url']) == 'admin' && ($_POST['pass']) == 'admin' )
			{

			}
			$sql = "select * from nguoidangky where MaSo = ".$_POST['usr']." and MatKhau = '".$_POST['pass']."'";
			$result = $con->query($sql);
			elseif ($result->num_rows > 0)
			{
				
						$_SESSION['User']=$_POST['usr'];
						header("location:webcam.php");
					
				
			}
			else
			{
				header("location:Login.php?Invalid=Please Enter");
			}
		}
	}
	mysqli_close($con);
?>
