<?php
  $conn = mysqli_connect('localhost','root','123456','qlkhuonmat'); 

  $sql    = "select MaSo from nguoidangky";
  $result = mysqli_query($conn, $sql);
  $rows = array();
  while ($row = mysqli_fetch_array($result)) {
      array_push($rows,array('MaSo' => $row['MaSo']));
   }
   echo json_encode($rows);
   mysqli_close($conn);
?>
