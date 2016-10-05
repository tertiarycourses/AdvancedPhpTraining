<?php

class example {
	private $a = 4;

	public function get_a() {
		return $this->a;
	}

	public function set_a($value) {
		$this->a = $value;
	}
}

$ex1 = new example();

echo $ex1->get_a().'<br>';
echo $ex1->set_a(15);
echo $ex1->get_a().'<br>';
//echo $ex1->hello2();
//echo $ex1->hello3();
?>