<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - UKM Musik</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <img src="music_logo.png" alt="Logo UKM Musik" class="logo">
        <h2>Pendaftaran Anggota Baru UKM Musik</h2>
        <form action="register_process.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>

            <label for="instrument">Alat Musik:</label>
            <input type="text" id="instrument" name="instrument" required>

            <button type="submit" class="btn-submit">Daftar</button>
        </form>
    </div>
</body>
</html>
