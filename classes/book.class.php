<?php
    require_once "database.class.php";


    class Book {
        private $conn;

        public $book_ID;
        public $title;
        public $ISBN;
        public $publication;
        public $category;

        function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
      }
    
    }



    //BOOK AUTHOR
    class Book_Author{
        private $conn;

        public $book_ID;
        public $author_ID;

        function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
      }




    }



    // AUTHOR

    class Author{
        private $conn;

        public $author_ID;
        public $first_name;
        public $last_name;
        public $mid_name;
        public $nationality;

         function __construct(){
            $db = new Database;
            $this->conn = $db->connect();
      }



    }
    
?>