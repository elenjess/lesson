<?php

class Car {

	private $fuel = 40;
	private $capacity = 9;
	
	public function ride($distance) {
		$this->fuel -= $this->capacity * ($distance / 100);		
		}
		public function checkFuel() {
		return 'I have' . $this->fuel . 'liters';
	}
	}
	


$my_car = new Car();
$my_car->ride(150);
echo $my_car->checkFuel;
