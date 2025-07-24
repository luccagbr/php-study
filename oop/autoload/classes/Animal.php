<?php
	abstract class Animal {
		private $name;
		private $weight;

		public function __construct($name, $weight) {
			$this->name = $name;
			$this->weight - $weight;
		}

		public function grunt() {
			return "Grunhido";
		}

		public function move() {}

		public function getName() {
			return $this->name;
		}

		public function setName($name) {
			$this->name = $name;
		}

		public function getSpecies() {
			return $this->species;
		}

		public function setSpecies($species) {
			$this->species = $species;
		}

		public function getWeight() {
			return $this->weight;
		}

		public function setWeight($weight) {
			$this->weight = $weight;
		}
	}
?>