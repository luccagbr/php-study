<?php
    class Database extends PDO {
        private $connection;

        public function __construct($database, $host, $user, $password) {
            $this->connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        }

        public function setParams($statement, $params) {
            foreach($params as $key => $value) {
                $this->setParam($statement, $key, $value);
            }
        }

        public function setParam($statement, $key, $value) {
            $statement->bindParam($key, $value);
        }

        public function execQuery($rawQuery, $params = array()) {
            $stmt = $this->connection->prepare($rawQuery);

            if(sizeof($params)) {
                $this->setParams($stmt, $params);
            }

            $stmt->execute();

            return $stmt;
        }

        public function select($rawQuery, $params) {
            $result = $this->execQuery($rawQuery, $params);

            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>