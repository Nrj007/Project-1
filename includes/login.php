<?php
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require("dbh.inc.php");
        $checkQuery = "SELECT * FROM login WHERE username = ?";
        $stmt = $pdo->prepare($checkQuery);
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $storedPassword = $user["password"];
            if ($password === $storedPassword) {
                $_SESSION['username'] = $username;
                echo "<div>Success.</div>";
                sleep(2);

                header("Location: http://localhost/Assignment/home.php");
                exit();
            } else {
                $passwordErrorMessage = "Incorrect password";
            }
        } else {
            $usernameErrorMessage = "Incorrect username";
        }
    } catch (\Throwable $th) {
        $message = "An error occurred: " . $th->getMessage();
    }
}
