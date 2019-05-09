<?php
 
    $json = $_POST['data'];
   	var_dump($json);
 	$con = new mysqli('localhost','root','123456','qlkhuonmat');
	$con->query($json);
    mysqli_close($con);

?>