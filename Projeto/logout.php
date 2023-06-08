<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in, destroy the session
    session_destroy();
}

// Redirect the user back to the welcome page
header("Location: welcome.php");
exit;
?>
