<?php
$db_host = "localhost";
$dsn = "mysql:host=localhost;dbname=myfirst";
$dbusername = "root";
$dbpassword = "root";

try {
   $pdo = new PDO($dsn, $dbusername, $dbpassword);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   header("http://localhost/Assignment/error.php");
   $error =   "Connection Failed: " . $e->getCode();
}
