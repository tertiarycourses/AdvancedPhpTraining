<?php

$file='test.txt';
if ($handle = fopen($file,'r')) {
	$content = fread($handle, 6);
}
else {
	echo 'cannot open file';
}
fclose($handle);
echo $content;
echo '<br>';


$content = file_get_contents($file);
echo $content;
echo '<br>';

$file='test.txt';
$content = "";
if ($handle = fopen($file,'r')) {
	while (!feof($handle)) {
		$content .= fgets($handle);
	}
}
else {
	echo 'cannot open file';
}

fclose($handle);
echo $content;
echo '<br>';



?>