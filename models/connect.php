<?php

class Connect {
    public function connect() {
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'onlinestoredb';

        $con = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        echo "Connected successfully";
    }

}