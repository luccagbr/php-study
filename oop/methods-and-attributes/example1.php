<?php
	class Car {
		private $name;
		private $model;
		private $year;

		public function __construct($name, $model, $year) {

			$this->name = $name;
			$this->model = $model;
			$this->year = $year;
		}

		private function getModel() {
			return $this->model;
		}

		private function setModel($model) {
			$this->model = $model;
		}

		private function getName() {
			return $this->name;
		}

		private function setName($name) {
			$this->name = $name;
		}

		private function getYear() {
			return $this->year;
		}

		private function setYear($year) {
			$this->year = $year;
		}

		public function showData() {
			return array(
				"name" => $this->getName(),
				"year" => $this->getYear(),
				"model" => $this->getModel()
			);
		}
	}

	$car = new Car("Focus", "Sedan", "2024");

	foreach($car->showData() as $key => $carData) {
		echo "$key - " . $carData . "<br>";
	};
?>