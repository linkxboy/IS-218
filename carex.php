<?php
	$car = new car;
	print_r($car);
	
	echo $car->make;
	
	abstract class car {
		protected $engine;
		protected $wheels;
		protected $doors;
		protected $length;
		protected $weight;
		protected $color;
	}
	
	class ford extends car{}
	class taurus extends for{}

?>