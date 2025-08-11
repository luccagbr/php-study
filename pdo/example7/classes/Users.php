<?php
	class Users {
		private $email_institutional;
		private $person_id;
		private $login;
		private $password;	

		public function __construct($email_institutional, $login, $password, $person_id) {
			$this->setEmailInstitutional($email_institutional)
			$this->setPersonId($person_id)
			$this->setLogin($login)
			$this->setPassword($password)
		}

		public function getEmailInstitutional() {
			return $this->email_institutional;
		}

		public function getPersonId() {
			return $this->person_id;
		}

		public function getLogin() {
			return $this->login;
		}

		public function getPassword() {
			return $this->password;
		}

		public function setEmailInstitutional($email_institutional) {
			$this->email_institutional = $email_institutional;
		}

		public function setPersonId($person_id) {
			return $this->person_id;
		}

		public function setLogin($login) {
			$this->login = $login;
		}

		public function setPassword($password) {
			$this->password = $password;
		}
	}
?>