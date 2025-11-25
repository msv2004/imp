<?php
session_start();
include 'db.php';

if ($_SESSION['role'] !== 'owner') {
    header("Location: index.html");
    exit();
}

echo "<h2>Owner Dashboard</h2>";
?>
