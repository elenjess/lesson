<?php

class MyObject {
	public $name = 'Box';
	private $material = 'Wood';
	protected $size = 30;

}

class Box extends MyObject {
	public function getMaterial() {
		$this->size .='ok';
		return $this->size;
	}
}
$object = new MyObject();
$my_box = new Box();
echo $my_box->getMaterial();