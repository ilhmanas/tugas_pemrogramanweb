<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM members WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: members.php"); // Redirect ke members.php setelah hapus
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
