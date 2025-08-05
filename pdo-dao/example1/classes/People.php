<?php
    class People {
        private $name;
        private $birthday_date;
        private $email;

        public function __construct($name, $birthday_date, $email) {
            $this->setName($name);
            $this->setName($birthday_date);
            $this->setName($email);
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
            $this->name = $name;
        }

        public function setBirthdayDate($birthday_date) {
            $this->birthday_date = $birthday_date;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function findPeopleById($person_id) {
            $connection = new Database("users_control", "localhost", "root", "");

            $result = $connection->select("SELECT * FROM people WHERE id = :person_id", array("person_id" => $person_id));
        
            if($result[0]) {
                $this->setName($result[0]["name"]);
                $this->setBirthdayDate(new DateTime($result[0]["birthday_date"]));
                $this->setEmail($result[0]["email"]);
            }
        }

        public function __toString() {
            return json_encode(
                array(
                    "name" => $this->getName(),
                    "birthday_date" => $this->getBirthdayDate(),
                    "email" => $this->getEmail()
                )
            );
        }
    }
?>