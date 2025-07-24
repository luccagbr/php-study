<?php
	class Person {
		private $id;
		private $name;
		private $birthday_date;

		public function __construct($name, $birthday_date) {
			$this->id = rand();
			$this->name = $name;
			$this->birthday_date = $birthday_date;
		}

		public function getName() {
			return $this->name;
		}

		public function getBirthdayDate() {
			return $this->birthday_date;
		}

		public function setName($name) {
			$this->name = $name;
		}

		public function setBirthdayDate($birthday_date) {
			$this->birthday_date = $birthday_date;
		}

		public function __toString() {
			return array(
				"name" => $this->name,
				"birthday_date" => $this->birthday_date
			);
		}
	}
?>