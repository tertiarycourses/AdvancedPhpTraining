<?php

$file='test.txt';
echo filesize($file);

echo strftime('%m/%d/%Y $H:%M',filemtime($file)).'<br>';
echo strftime('%m/%d/%Y $H:%M',filectime($file)).'<br>';
echo strftime('%m/%d/%Y $H:%M',fileatime($file)).'<br>';


?>