<?php

	// $image = file_get_contents('./icon/'.$match["params"]["icon"]);
	$image = file_get_contents('./icon/iconLogin.png');

	header('Content-type: image/png;');
	header("Content-Length: " . strlen($image));
	if($image)
		echo $image;
	else{
	  	echo "404 error";
	}
?>