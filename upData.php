<?php
 
    $json = $_POST['data'];
   	var_dump($json);
 	$conn = mysqli_connect('localhost','root','123456','qlkhuonmat'); 
	mysqli_query($conn, $json);
    mysqli_close($conn);

?>