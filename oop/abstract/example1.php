<?php
	interface IVehicle {
		public function accelerate();
		public function break();
	}

	abstract class Vehicle implements IVehicle {
		protected $name;
		protected $model;
		protected $year;

		public function accelerate() {
			echo "O veículo acelerou.<br>";
		}

		public function break() {
			echo "O veículo frenou";
		}
	}

	class AutoMobile extends Vehicle {
		private $gear;


		public function changeGear($gear) {
			$this->gear = $gear;
		}

		public function accelerate() {
			echo "O veículo acelerou.<br>";
		}

		public function break() {
			echo "O veículo frenou";
		}
	}

	$civic = new AutoMobile();
?>