<?php
// Gán dữ liệu nhân được và $img
$img = $_POST['imgBase64'];
$id = $_POST['maso'];
$stt =  $_POST['stt'];
// Tìm kiếm và thay thế đường dẫn ảnh 
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img); 
$str='("User.'.$id.'.'.$stt.'",'.$id.",".$stt.")";
$con = new mysqli('localhost','root','123456','qlkhuonmat');
$sql = "INSERT INTO hinh(TenAnh,MaTaiKhoan,STT) values".$str;
$result = $con->query($sql);

$fileName = 'imgs/'.$id.'/'.'User.'. $id .'.'.$stt.'.png'; 
 
// Ghi dữ liệu $fileData đến file = $fileName
file_put_contents($fileName, $fileData); 
 
// Trả về tham số result khi hoàn tất
echo $fileName; 
?>