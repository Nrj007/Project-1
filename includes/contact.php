<?php
$successMessage = "";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = $_POST["contact"];

    try {
        require("dbh.inc.php");
        $stmt = $pdo->prepare("INSERT INTO contact (`email`) VALUES (?);");
        $stmt->execute([$contact]);
        $successMessage = "Data stored successfully!";
    } catch (\Throwable $th) {
        $errorMessage = "An error occurred: " . $th->getMessage();
    }
}
