<?php
    require_once "database.class.php";



    class Members{
        private $conn;

        public $mem_ID;
        public $first_name;
        public $mid_name;
        public $last_name;
        public $email;
        public $phone_num;


        function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
    }
    }

?>