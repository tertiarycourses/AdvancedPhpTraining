<?php

// echo getcwd();

// mkdir('newdir',0777);

$dir = ".";
if (is_dir($dir)) {
	if($dir_handle=opendir($dir)) {
		while($filename = readdir($dir_handle)) {
			echo $filename.'<br>';
		}
	}
}

?>