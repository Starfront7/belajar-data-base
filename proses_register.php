<?php
include "koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// Simpan ke database
$query = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')";
if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Registrasi berhasil!');window.location='login.php';</script>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
