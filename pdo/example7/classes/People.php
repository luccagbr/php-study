<?php
	class People {
		private $name;
		private $birthday_date;
		private $email;

		public function __construct($name, $birthday_date, $email) {
			$this->setName($name);
			$this->setBirthdayDate($birthday_date);
			$this->setEmail($email);
		}

		public function getName() {
			return $this->name;
		}

		public function getBirthdayDate() {
			return $this->birthday_date;
		}

		public function getEmail() {
			return $this->email;
		}

		public function setName($name) {
			if(!is_string($name)) {
				throw new Exception("Não foi possível salvar nome da pessoa informada!");
			}

			$this->name = $name;
		}

		public function setBirthdayDate($birthday_date) {
			$this->birthday_date = $birthday_date;
		}

		public function setEmail($email) {
			$this->$email = $email;
		}

		public function __toString() {
			return array(
				"name" => $this->getName(),
				"birthday_date" => $this->getBirthdayDate(),
				"email" => $this->getEmail()
			);
		}
	}
?>