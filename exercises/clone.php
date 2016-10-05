<?php

class Beverage {
	public $name;

}

$a = new Beverage();
$a->name = 'coffee'.'<br/>';
echo $a->name;
$b = $a;
$b->name = 'tea'.'<br/>';
echo $a->name;
$c = clone $a;
$c->name ='juice';
echo $a->name;
echo $c->name;

?>