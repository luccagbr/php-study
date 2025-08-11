<?php
	class User {
		private $id;
		private $email_institutional;
		private $password;
		private $person;

		public function __construct($email_institutional, $password, $person) {
			$this->email_institutional = $email_institutional;
			$this->password = $password;

			if(isset($person) && ($person["name"] && $person["birthday_date"])) {
				$this->person = new Person($person["name"], $person["birthday_date"]);
			} else {
				throw new Exception("<br>Pessoa vinculada ao usuário é obrigatória!<br>");
			}
		}

		public function __toString() {
			return json_encode(array(
				"email_institutional" => $this->email_institutional,
				"person" => $this->person->__toString()
			));
		}

		public function getEmailInstitutional() {
			return $this->email_institutional;
		}

		public function getPassword() {
			return $this->password;
		}

		public function getPeopleId() {
			return $this->people_id;
		}

		public function setEmailInstitutional($email_institutional) {
			$this->email_institutional = $email_institutional;
		}

		public function setPassword($password) {
			$this->password = $password;
		}

		public function setPeopleId($people_id) {
			$this->people_id = $people_id;
		}
	}
?>