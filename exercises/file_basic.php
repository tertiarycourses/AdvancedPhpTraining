<?php
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';

echo file_exists(__FILE__) ? 'yes' : 'no'; 
echo '<br>';
echo file_exists(__DIR__.'/file_basic.php') ? 'yes' : 'no';
echo '<br>';
echo file_exists(__DIR__) ? 'yes' : 'no';
echo '<br>';

echo is_file(__FILE__)?'yes' :'no';
echo '<br>';
echo is_dir(__DIR__)?'yes' :'no';
?>