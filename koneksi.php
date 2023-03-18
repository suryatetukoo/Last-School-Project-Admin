<?php

        include "function.php";

        $host="localhost";
        $user="root";
        $pass="";
        $database="perpustakaan";
        
        $mysqli= new mysqli ($host,$user,$pass,$database);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        //Object Oriented Style $mysqli -> new mysqli(host, username, password, dbname, port, socket)

                //check connection
                if ($mysqli -> connect_errno) {
                    trigger_error("Failed to connect to MYSQL: " . $mysqli, E_USER_NOTICE);
                    //trigger_error(message, type)
                }
?>