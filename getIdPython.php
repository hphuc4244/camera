<?php
    $json = $_POST['cmd'];
	 $con = new mysqli('localhost','root','123456','qlkhuonmat');
   mysqli_set_charset( $con, 'utf8'); 
   $sql = "select * from nguoidangky where MaSo = ".$json;
  
 $result = $con->query($sql);
  $rows = array();
  while ($row = mysqli_fetch_array($result)) {
      array_push($rows,array('MaSo' => $row['MaSo']),array('HoTen' => $row['HoTen']));
   }
   // var_dump($rows);
   echo json_encode($rows,JSON_UNESCAPED_UNICODE);
   mysqli_close($con);

?>
