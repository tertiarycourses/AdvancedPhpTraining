<?php

$file = 'test2.txt';
if (!file_exists($file)) {
	die('no file exist');
} else {
	fopen($file,'r');
}
?>