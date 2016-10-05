<?php

class example {
	public function hello1() {
		return 'hello public';
	}

	protected function hello2() {
		return 'hello protected';
	}
	private function hello3() {
		return 'hello private';
	}
}

$ex1 = new example();

echo $ex1->hello1();
//echo $ex1->hello2();
//echo $ex1->hello3();
?>