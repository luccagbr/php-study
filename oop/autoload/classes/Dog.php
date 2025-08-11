<?php
	class Dog extends Animal {
		private $race;

		public function __construct($name, $weight, $race) {
			parent::__construct($name, $weight);

			$this->race = $race;
		}

		public function grunt() {
			return "Latindo - " . parent::grunt() . "<br>";
		}
	}
?>