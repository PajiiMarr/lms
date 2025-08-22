<?php
    require_once "database.class.php";


    class Subject{
        private $conn;
        public $subject_ID;
        public $subject_name;
        
        function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
     }
     
    }

?>