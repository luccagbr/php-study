<?php
    class Users {
        private $person_id;
        private $email_institutional;

        public function __construct($person_id, $email_institutional) {
            $this->setPersonId($person_id);
            $this->setEmailInstitutional($email_institutional);
        }
  
        public function getPersonId() {
            return $this->person_id;
        }

        public function getEmailInstitutional() {
            return $this->email_institutional;
        }

         public function setPersonId() {
            $this->person_id = $this->person_id;
        }

        public function setEmailInstitutional() {
            $this->email_institutional = $this->email_institutional;
        }
    }
?>