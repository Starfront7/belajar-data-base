<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form action="proses_register.php" method="POST">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Daftar</button>
    <p>Sudah punya akun? <a href="login.php">Login</a></p>
  </form>
</div>

</body>
</html>
