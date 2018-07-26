<?php

class Box {

	private $x;
	private $y;
	private $z;
	private $volume;
	private $color;
	private $material;
	private $size;

	public function __construct($x, $y, $z, $color, $material) {
		$this->x = $x;
		$this->y = $y;
		$this->z = $z;
		$this->volume = $x * $y * $z;
		$this->color = $color;
		$this->material = $material;
		$this->size = $size;
	}

	public function getVolume() {
		return 'The volume is '. $this->volume;
	}

	public function getView() {
		return "<br> The box is " . $this->color . ' and made of ' . $this->material;
	}
	public function compare() {
		if ($this->volume > 50)
			return ' and big';
		else
			return ' and small';
	}
}


$box1 = new Box(12,53,5,'brown','wood');
$box1->getVolume();
echo $box1->getVolume();

$box1->getView();
echo $box1->getView();

$box1->compare();
echo $box1->compare();