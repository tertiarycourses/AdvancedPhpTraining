<?php

class example {
	public $a = 4;
	protected $b = 5;
	private $c = 6;
}

$ex1 = new example();

echo $ex1->a;
//echo $ex1->b;
//echo $ex1->c;
?>