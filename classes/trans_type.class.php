<?php
    require_once "database.class.php";

    class Trans_type {

        private $conn;

        public $type_ID;
        public $staff_ID;
        public $stud_ID;
        public $fac_ID;
        public $issue_date;
        public $due_date;
        public $return_date;
        public $issued_by;

        function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
    }
    }

?>  