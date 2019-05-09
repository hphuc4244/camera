<?php

	$image = file_get_contents('./imgs/'.$match["params"]["mssv"].'/User.'.$match["params"]["mssv"].'.'.$match["params"]["id"].'.png');

	
	header('Content-type: image/png;');
	header("Content-Length: " . strlen($image));
	header("Content-Disposition: attachment; filename=User.".$match["params"]["mssv"].'.'.$match["params"]["id"].".png");
	if($image)
		echo $image;
	else{
	  	echo "404 error";
	}
?>