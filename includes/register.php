<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $errors = array();


    try {
        require_once "dbh.inc.php";

        $checkQuery = "SELECT COUNT(*) FROM login WHERE username = ?";
        $checkStmt = $pdo->prepare($checkQuery);
        $checkStmt->execute([$username]);
        $count = $checkStmt->fetchColumn();

        if ($count > 0) {
            $usernameErrorMessage = "Username Already Taken.";
        } else {
            $stmt = $pdo->prepare("INSERT INTO login (`username`, `password`) VALUES (?, ?);");
            $stmt->execute([$username, $password]);
            header("location: http://localhost/Assignment/");
            exit();
        }
    } catch (\Throwable $th) {
        echo '<script>alert("An error occurred: ' . $th->getMessage() . '");</script>';
    }
}
