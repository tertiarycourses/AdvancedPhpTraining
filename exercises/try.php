<?

function greet($name) {
	if (!is_string($name)) {
		throw new Exception("Not a name", 1);		
	} else {
		echo 'Hello '.$name;
	}
}

try {
	$name = 3;
	greet($name);
} catch (Exception $e) {
	echo 'Please enter a name';
	echo $e->getMessage();
}
?>
