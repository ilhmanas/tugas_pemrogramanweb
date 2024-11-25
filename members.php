<?php
include 'config.php';

$sql = "SELECT * FROM members ORDER BY registration_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota - UKM Musik</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Daftar Anggota UKM Musik</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alat Musik</th>
            <th>Tanggal Daftar</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['name']); ?></td>
                <td><?= htmlspecialchars($row['nim']); ?></td>
                <td><?= htmlspecialchars($row['instrument']); ?></td>
                <td><?= htmlspecialchars($row['registration_date']); ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
