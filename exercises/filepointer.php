<?php

$file='test.txt';
if ($handle = fopen($file,'w')) {
	fwrite($handle,'123456789');
	$pos = ftell($handle);

	fseek($handle,$pos-6);
	fwrite($handle, '123456789');

	rewind($handle);
	fwrite($handle, 'abc');
}
else {
	echo 'cannot open file';
}
fclose($handle);




?>