<?php
    require_once "database.class.php";

    class Transaction {
        private $conn;

        public $type_ID;
        public $book_ID;
        public $transaction_ID;

          function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
        }


    }



    //FINE

    class Fine{
        private $conn;

        public $transaction_ID;
        public $amount;
        public $payment_stat;


         function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
      }


    }

?>