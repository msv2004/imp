<?php
session_start();
include 'db.php';

if ($_SESSION['role'] !== 'customer') {
    header("Location: index.html");
    exit();
}

echo "<h2>Submit Review</h2>";
?>
