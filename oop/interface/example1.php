<?php
	interface Automobile {
		public function accelarate();
		public function break();
		public function changeGear();
	}

	class Civic implements AutoMobile {
		public function __construct() {}

		public function accelarate() {
			echo "O carro acelerou<br>";
		}

		public function break() {
			echo "O carro frenou!<br>";
		}

		public function changeGear() {}
	}

	$car = new Civic();

	$car->accelarate();
	$car->break();

?>