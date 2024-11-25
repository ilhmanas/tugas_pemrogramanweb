<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM members WHERE id=$id");
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Anggota - UKM Musik</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Edit Anggota</h2>
    <form action="edit_process.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($data['name']); ?>" required>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?= htmlspecialchars($data['nim']); ?>" required>

        <label for="instrument">Alat Musik:</label>
        <input type="text" id="instrument" name="instrument" value="<?= htmlspecialchars($data['instrument']); ?>" required>

        <button type="submit" class="btn-submit">Simpan</button>
    </form>
</body>
</html>
