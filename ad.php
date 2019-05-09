<?php
   
   $con = mysqli_connect('localhost','root','','qlkhuonmat');
?>
<!DOCTYPE html>
<html>
<body>

<h2>The Button Element</h2>
<form action="ad.php" method="POST">
	<input type="text" name="url" id="url">
	<input type="submit" value="Download" name="Tai">
</form>
</body>
</html>
		<?php
		function downloadFile($url, $filename,$directory,$mataikhoan) {
			$img = file_get_contents($url); 
			file_put_contents($directory."/".$mataikhoan."/".$filename.".png",$img);
				    
		}

		if (isset($_POST['Tai']))
		{
				$MaSo = array();
				$con = mysqli_connect('localhost','root','','qlkhuonmat');
			            $sql = "SELECT MaSo FROM nguoidangky where Quyen=0";
			            $result = $con->query($sql);
			      if ($result->num_rows > 0)
					{
						while($row = $result->fetch_assoc())
						{
							array_push($MaSo,$row['MaSo']);
						}
						
					}
		
				$folder = glob($_POST['url']. '/*',GLOB_ONLYDIR);
				for($i = 0; $i<count($folder); $i++)
				{
					$folder[$i] = explode("/", $folder[$i])[1];
				}
				
				print_r ($folder);
				$result = array_values(array_diff($MaSo,$folder));   
				print_r($result);
				for($i=0;$i<count($result);$i++)
				{
					$con = mysqli_connect('localhost','root','','qlkhuonmat');
					$sql = "SELECT * FROM hinh where MaTaiKhoan=".$result[$i];
					$result1 = $con->query($sql);
					while ($row = $result1->fetch_assoc()) {
						
						mkdir($_POST['url']."/".$result[$i], 0777, true);
						if(file_exists($_POST['url']."/".$result[$i])==true)
						{	
							downloadFile("./imgs/".$row['MaTaiKhoan']."/".$row['TenAnh'].".png",$row['TenAnh'],$_POST['url'],$row['MaTaiKhoan']);
						}
					}					
				}			
			}
		?>
