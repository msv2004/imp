<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: index.html");
    exit();
}

$role = $_SESSION['role'];

echo "<h2>Welcome, $role</h2>";

if ($role == 'admin') {
    echo "<p>Admin functionalities: Manage paintings, view reviews, update paintings.</p>";
    // Admin-specific code here
} elseif ($role == 'owner') {
    echo "<p>Owner functionalities: Submit paintings, view painting reviews.</p>";
    // Owner-specific code here
} elseif ($role == 'customer') {
    echo "<p>Customer functionalities: Submit reviews for paintings.</p>";
    // Customer-specific code here
}
?>
