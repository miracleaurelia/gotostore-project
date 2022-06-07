<?php
    function setUpDBConnection() {
        // development connection
        // $host = "localhost";
        // $user = "root";
        // $pass = "";
        // $database = "ecommerceweb";

        // remote database connection
        $host = "remotemysql.com";
        $user = "pNLoi1LCD4";
        $pass = "8TF1bvejnw";
        $database = "pNLoi1LCD4";

        $connection = mysqli_connect($host, $user, $pass, $database);
        return $connection;
   }
?>