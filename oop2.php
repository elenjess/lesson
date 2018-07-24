<?php

 abstract class MyObject {
	public $name = 'Box';
	const MATERIAL  = 'Wood';
	protected $size = 30;

	public static function getMaterial() {
		
		return self::MATERIAL;
}
	
	
}
$material = MyObject::getMaterial();
echo $material;