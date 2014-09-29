<?php
	// Max # images per page
	$maxImages = 30;
	
	// Getting the images in the current folder of index.php
	$dir = scandir(dirname(__FILE__));
	// Removing . and .. (DirectoryIterator::isDot can also be used)
	// Best would be array_diff with '.', '..', '.htaccess', '.svn', 'index.php' [Issue will be raised]
	$dir= array_slice($dir, 3);
	
	foreach ($dir as $fileinfo) {
	        // we have each image name here.
	        echo '<img src="'.$fileinfo.'" style="width:100%;">';
	}
?>
