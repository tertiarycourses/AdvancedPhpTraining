<?php

class Foo {
	static $a = 8;

}

class Foo2 extends Foo {}
class Foo3 extends Foo {}

echo Foo::$a . '<br>';
Foo2::$a = 20;
echo Foo::$a . '<br>';
Foo3::$a = 50;
echo Foo::$a . '<br>';

?>