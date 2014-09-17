<?php

	$car_order = 'taurus';
	
	
	$car = new $car_order;
	
	
	$car->setColors('blue');
	print_r($car);
	
	echo $car->make;
	
	abstract class car {
		protected $engine;
		protected $wheels =4;
		protected $doors;
		protected $length;
		protected $weight;
		protected $colors;
		
		public function setColors($colors) {
			$this->colors = $colors;
			}
		public function setEngine(engine $engine){
			$this->engine=$engine;
		}
	}
		abstract class ford extends car {}
		class taurus extends ford {
			public function __construct() {
				$this->doors = '4';
				$this->length = '2000cm';
				$this->weight='1700kg';
			//type hinting
			$engine = new engine;
			$this->setEngine($engine);
		}
	
	}
	
	class engine {}	
?>