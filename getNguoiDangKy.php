<?php
  $con = new mysqli('localhost','root','123456','qlkhuonmat'); 

  $sql    = "select MaSo from nguoidangky";
  $result = $con->query($sql);
  $rows = array();
  while ($row = mysqli_fetch_array($result)) {
      array_push($rows,array('MaSo' => $row['MaSo']));
   }
   echo json_encode($rows);
   mysqli_close($con);
?>
