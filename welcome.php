<?php
session_start();

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Display welcome message
echo "Welcome, " . $_SESSION['username'];
?>
