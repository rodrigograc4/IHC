<?php
// register.php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username and password
    $newUsername = $_POST["new_username"];
    $newPassword = $_POST["new_password"];

    // Validate the username and password
    if (registerUser($newUsername, $newPassword)) {
        header("Location: index2.php");
        exit;
    } else {
        echo "Failed to register the user";
    }
}

// Function to register the user
function registerUser($newUsername, $newPassword) {
    // File path to store user credentials
    $filePath = 'users.txt';

    // Check if the username already exists
    if (isUsernameTaken($newUsername)) {
        return false; // Username already exists, registration failed
    }

    // Check if the password meets the requirements
    if (validatePasswordStrength($newPassword)) {
        // Generate a hashed password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Format the new user's credentials
        $newUserCredentials = $newUsername . ':' . $hashedPassword . PHP_EOL;

        // Append the new user credentials to the file
        if (file_put_contents($filePath, $newUserCredentials, FILE_APPEND | LOCK_EX) !== false) {
            return true; // User registration successful
        } else {
            return false; // Failed to register the user
        }
    } else {
        return false; // Password does not meet the requirements
    }
}
// Function to check if the username already exists
function isUsernameTaken($username) {
    // File path where user credentials are stored
    $filePath = 'users.txt';

    // Check if the file exists
    if (file_exists($filePath)) {
        // Open the file in read mode
        $file = fopen($filePath, 'r');

        // Check if the username already exists
        while (($line = fgets($file)) !== false) {
            $credentials = explode(':', trim($line));
            $storedUsername = $credentials[0];
            if ($storedUsername === $username) {
                fclose($file);
                return true; // Username already exists
            }
        }

        // Close the file
        fclose($file);
    }

    return false; // Username does not exist
}
// Function to validate password strength
function validatePasswordStrength($password) {
    // Check if the password length is greater than 4 characters
    if (strlen($password) <= 4) {
        return false;
    }

    // // Check if the password contains consecutive numbers
    // for ($i = 0; $i < strlen($password) - 2; $i++) {
    //     if (ctype_digit($password[$i]) && ctype_digit($password[$i + 1]) && ctype_digit($password[$i + 2])) {
    //         return false;
    //     }
    // }

    return true;
}

?>
