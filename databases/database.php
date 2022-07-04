<?php
    // to manage database tables and data

    // import dependencies
    include "./connection/myConnection.php"; // respect with index.php location
    
    // variables
    $srvrName = "localhost";
    $srvrUsername = "root";
    $srvrPassword = "";
    $dbName = "hmsdb";

    // local connection object
    $connObj = new MyConnection();

    // table names
    $accountTbl = "account";

    // queries
    $createDb = "CREATE DATABASE " .$dbName;
    $selectDb = "USE " .$dbName;

    // operations
    // try to connect to db, if not exists, create db
    if($connObj->exeQuery($selectDb)) {
        echo "<u>" .$dbName. "</u> succesfully connected!<br>";
    }
    // if db not exists, create it, then connect to it
    else {
        if($connObj->exeQuery($createDb)) {
            echo "<u>" .$dbName. "</u> succesfully created!<br>";

            // select the newly created database
            if($connObj->exeQuery($selectDb)) {
                echo "<u>" .$dbName. "</u> succesfully connected!<br>";
            }
            else {
                echo "Database selection error: " .mysqli_error($connObj->getConnection()). "<br>";
            }
        }
        // database already existed
        else {
            echo "Database creation error: " .mysqli_error($connObj->getConnection()) ."<br>";
        }
    }
?>