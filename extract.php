<?php

$zip = new ZipArchive;
     
if ($zip->open('filename.zip') === TRUE) {
     
	$zip->extractTo('/destination/directory/');
	
	$zip->close();
	
	echo 'ok';

	} else {

	echo 'failed';
	
	}

?>