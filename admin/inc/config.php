<?php
ini_set('error_reporting', E_ALL);

date_default_timezone_set('Asia/Jakarta');

// development connection
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "ecommerceweb";

// remote database connection
$dbhost = "remotemysql.com";
$dbuser = "pNLoi1LCD4";
$dbpass = "8TF1bvejnw";
$dbname = "pNLoi1LCD4";

define("ADMIN_URL", "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}