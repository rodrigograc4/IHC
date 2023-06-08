<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    $username = htmlspecialchars(strip_tags($username));

    $filePath = 'wishlist.txt';

    $lines = file($filePath);
    $newLines = [];

    foreach ($lines as $line) {
        $parts = explode(':', trim($line));
        $storedUsername = $parts[0];

        if ($storedUsername !== $username) {
            $newLines[] = $line;
        }
    }

    file_put_contents($filePath, implode("\n", $newLines));
}
?>