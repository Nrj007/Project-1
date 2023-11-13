<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {

        require("dbh.inc.php");
        $checkQuery = "SELECT COUNT(*) FROM login WHERE username = ?";
        $checkStmt = $pdo->prepare($checkQuery);
        $checkStmt->execute([$username]);
        $count = $checkStmt->fetchColumn();

        if ($count > 0) {
            $message = "Username is already taken.";
        } else {
            $stmt = $pdo->prepare("INSERT INTO login (`username`, `password`) VALUES (?, ?);");
            $stmt->execute([$username, $password]);
            header("location: ../home.php");
            exit();
        }
    } catch (\Throwable $th) {
        $message = "An error occurred: " . $th->getMessage();
    }
}


exit();
