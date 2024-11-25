<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$nim = $_POST['nim'];
$instrument = $_POST['instrument'];

$sql = "UPDATE members SET name='$name', nim='$nim', instrument='$instrument' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: members.php"); // Redirect ke members.php setelah edit
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
