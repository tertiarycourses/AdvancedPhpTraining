<?php

$file='test.txt';
if ($handle = fopen($file,'w')) {
	fwrite($handle,'hello');
}
else {
	echo 'cannot open file';
}
fclose($handle);
unlink($file);



?>