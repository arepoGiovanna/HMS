<?php
    // class to connect to the database

    class MyConnection {
        // variables
        private $srvrName = "localhost";
        private $srvrUsername = "root";
        private $srvrPassword = "";
        private $conn; // connection object

        //constructor
        public function __construct() {
            // establish a connection to the database
            $this->conn = new mysqli($this->srvrName, $this->srvrUsername, $this->srvrPassword);

            // report status of the connection
            if($this->conn->connect_error) {
                echo "Connection to <u>" .$this->srvrName. "</u>failed!<br>";
            }
            else {
                echo "Successfully connected to <u>" .$this->srvrName. "</u>!<br>";
            }
        }

        // method members
        // close connection to database
        public function closeConnection() {
            if($this->conn->close()) {
                echo "Connection closed!<br>";
            }
            else {
                echo "Connection not closed!<br>";
            }
        }

        // get connection from connection object
        public function getConnection() {
            return $this->conn;
        }

        // shortcut to executing an sql query
        // ! FIND A WAY TO SHOW ERROR
        public function exeQuery($query) {
            return $this->conn->query($query);
        }
    }
?>