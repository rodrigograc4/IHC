<?php
// forgot_password.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $newPassword = $_POST["new_password"];

    // Perform password reset logic
    if (resetPassword($username, $newPassword)) {
        echo "Password reset successful.";
    } else {
        echo "Failed to reset the password.";
    }
}

function resetPassword($username, $newPassword) {
    $filePath = 'users.txt';

    // Read the file and store the lines in an array
    $lines = file($filePath);

    // Flag to check if the username was found and password updated
    $updated = false;

    // Loop through the lines
    foreach ($lines as &$line) {
        // Explode the line to get the username and existing password
        $credentials = explode(':', trim($line));
        $storedUsername = $credentials[0];
        $storedPassword = $credentials[1];

        // Check if the username matches
        if ($storedUsername === $username) {
            // Generate a hashed password
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            // Update the line with the new password
            $line = $storedUsername . ':' . $hashedPassword . PHP_EOL;

            // Set the updated flag
            $updated = true;
            break;
        }
    }

    // Write the modified lines back to the file
    file_put_contents($filePath, implode('', $lines));

    return $updated;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>
