<?php
session_start();
if ($_SESSION['role'] !== 'owner') {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $available_until = $_POST['available_until'];

    $conn = new mysqli('localhost', 'root', '', 'painting_reviews');
    $stmt = $conn->prepare("INSERT INTO paintings (owner_id, title, description, available_until) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $_SESSION['user_id'], $title, $description, $available_until);

    if ($stmt->execute()) {
        echo "Painting added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<form method="post">
    <label>Title:</label>
    <input type="text" name="title" required>
    <label>Description:</label>
    <textarea name="description" required></textarea>
    <label>Available Until:</label>
    <input type="date" name="available_until" required>
    <button type="submit">Add Painting</button>
</form>
