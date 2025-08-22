<?php
    class Database {
        private $host = "localhost";
        private $database = "library";
        private $username = "root";
        private $password = "";
        protected $connection;

        function connect(){
            try {
                $this->connection = new PDO ("mysql:host=$this->host;dbname=$this->database;", $this->username, $this->password);
            } catch (PDOException $error) {
                echo "connection error" . $error->getMessage();
            }
            return $this->connection;
        }
    }
?>  