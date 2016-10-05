<?

function greet($name) {
	if (!is_string($name)) {
		throw new Exception("This is not a name", 1);		
	} else {
		echo 'Hello '.$name;
	}
}

try {
	$name = 3;
	greet($name);
} catch (Exception $e) {
	echo $e->getMessage().'<br>';
	echo 'Please enter a name';
}
?>