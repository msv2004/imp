<?php
session_start();
include 'db.php';

if ($_SESSION['role'] !== 'admin') {
    header("Location: index.html");
    exit();
}

echo "<h2>Admin Dashboard</h2>";

// Display reviews or other functionalities for admin
?>
