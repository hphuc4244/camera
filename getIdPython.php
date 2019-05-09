<?php
    $json = $_POST['cmd'];
	 $conn = mysqli_connect('localhost','root','123456','qlkhuonmat');
   mysqli_set_charset( $conn, 'utf8'); 
   $sql = "select * from nguoidangky where MaSo = ".$json;
  
  $result = mysqli_query($conn, $sql);
  $rows = array();
  while ($row = mysqli_fetch_array($result)) {
      array_push($rows,array('MaSo' => $row['MaSo']),array('HoTen' => $row['HoTen']));
   }
   // var_dump($rows);
   echo json_encode($rows,JSON_UNESCAPED_UNICODE);
   mysqli_close($conn);
?>
