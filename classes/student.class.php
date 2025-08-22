<?php
    require_once "database.class.php";

    class Student {
        private $conn;

        public $stud_ID;
        public $mem_ID;

        function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
    }
    }

?>