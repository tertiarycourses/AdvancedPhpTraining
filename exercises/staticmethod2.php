<?php

class Example {
	static $a = 8;

	static function display() {
		//return Example::$a;
		return self::$a;
	}


}

echo Example::display();

?>