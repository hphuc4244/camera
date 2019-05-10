<?php
	header("Content-Type: text/html");

	include dirname(__FILE__) . '/AltoRouter.php';
	$router = new AltoRouter();
	$router->setBasePath('');
	
    $router->map('GET','/', 'Login.php', 'Login');

	
	$router->map( 'GET', '/getImg/[*:mssv]/[*:id]', 'get.php', 'get');
	$router->map( 'POST', '/getNguoiDangKy', 'getNguoiDangKy.php', 'getNguoiDangKy');
	$router->map( 'POST', '/getHinh', 'getHinh.php', 'getHinh');
	$router->map( 'POST', '/upData', 'upData.php', 'upData');
	$router->map( 'POST', '/getIdPython', 'getIdPython.php', 'getIdPython');
	$match = $router->match();
	if($match) {
	  require $match['target'];
	}
	else {
	  header("HTTP/1.0 404 Not Found");
	  echo "404 error";
	}
?>