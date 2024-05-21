<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Replace this with your own authentication logic
        // For demonstration purposes, I'll just use dummy values
        $valid_username = 'user';
        $valid_password = 'password';

        // Check if username and password match
        if ($username === $valid_username && $password === $valid_password) {
            // Authentication successful, redirect to a protected page
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
            exit();
        } else {
            // Authentication failed, redirect back to login page with error message
            $_SESSION['error'] = "Invalid username or password";
            header('Location: index.php');
            exit();
        }
    }
}
?>
