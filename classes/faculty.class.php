<?php
    require_once "database.class.php";

    class Faculty{
        private $conn;

        public $fac_ID;
        public $mem_ID;

        function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
    }
    }

?>