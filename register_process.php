<?php
include 'config.php';

$name = $_POST['name'];
$nim = $_POST['nim'];
$instrument = $_POST['instrument'];

$sql = "INSERT INTO members (name, nim, instrument) VALUES ('$name', '$nim', '$instrument')";

if ($conn->query($sql) === TRUE) {
    header("Location: members.php"); // Redirect ke halaman members.php setelah berhasil daftar
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
