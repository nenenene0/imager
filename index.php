<?php
	$dir = scandir(dirname(__FILE__));
	
	$dir= array_slice($dir, 3);
	foreach ($dir as $fileinfo) {
	        // we have each image name here.
	        echo '<img src="'.$fileinfo.'" style="width:100%;">';
	}
?>
