<?php
 
  $json = json_decode($_POST['maso'],true);
  	
 	$con = new mysqli('localhost','root','123456','qlkhuonmat');
	 $rows = array();
	 
	  for($i=0;$i<count($json);++$i)
	  {
	  	$mssv = array();
	  

	  	$sql    = "select * from hinh where MaTaiKhoan=".$json[$i]["MaSo"];
	  	$result = $con->query($sql);
	  	while ($row = mysqli_fetch_array($result)) {
          	array_push($mssv,array('MaAnh' => $row['MaAnh'], 'TenAnh' => $row['TenAnh'], 'MaTaiKhoan' => $row['MaTaiKhoan'], 'STT' => $row['STT']));
      	}
      	if(!empty($mssv))
      	{
      		$rows[]=array('mssv' => $json[$i]["MaSo"], 'items' => $mssv);	
      	}
	  }
	  echo json_encode($rows);
	  
    mysqli_close($con);

?>