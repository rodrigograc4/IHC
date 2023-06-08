<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password
    if (validateCredentials($username, $password)) {
        // Upon successful login, set the session variables
        $_SESSION['username'] = $username;

        // Redirect to the welcome page or desired location
        header("Location: fifa23.php");
        exit;
    } else {
        // Invalid credentials, display an error message or redirect to the login page
        echo "Invalid username or password.";
    }
}

function validateCredentials($username, $password) {
    $filePath = 'users.txt';

    // Read the file and store the lines in an array
    $lines = file($filePath);

    // Loop through the lines
    foreach ($lines as $line) {
        // Explode the line to get the username and password
        $credentials = explode(':', trim($line));
        $storedUsername = $credentials[0];
        $storedPassword = $credentials[1];

        // Check if the username and password match
        if ($storedUsername === $username && password_verify($password, $storedPassword)) {
            return true; // Valid credentials
        }
    }

    return false; // Invalid credentials
}
?>
