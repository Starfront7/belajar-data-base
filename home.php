<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>Selamat datang, <?php echo $_SESSION['nama']; ?>!</h2>
  <p>Kamu berhasil login ke sistem 🎉</p>
  <a href="logout.php" class="logout">Logout</a>
</div>

</body>
</html>
