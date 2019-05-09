<?php

	$con = new mysqli('localhost','root','123456','qlkhuonmat');
	echo "thanh cong";
	session_start();
	mysqli_close($con);
?>
