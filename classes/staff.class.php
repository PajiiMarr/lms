<?php
    require_once "database.class.php";

    class Staff{
        private $conn;

        public $staff_ID;
        public $position;
        public $mem_ID;

        function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
    }
    }

?>