<?php

$file='test.txt';
if ($handle = fopen($file,'w')) {
	fwrite($handle,'hello');
}
else {
	echo 'cannot open file';
}
fclose($handle);

$content = "hello 1\n hello 2";
if ($size = file_put_contents($file, $content)) {
	echo 'done';
}
else {
	echo 'cannot open file';
}

?>