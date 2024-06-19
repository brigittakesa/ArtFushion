<?php
require 'koneksi.php';

$nama = $_POST["nama"];
$tgl_lahir = $_POST["tgl_lahir"];
$asal = $_POST["asal"];
$email = $_POST["email"];
$userName = $_POST["userName"];
$password = $_POST["password"];
$tipe = $_POST["tipe"];


$query_sql = "INSERT INTO data_login (nama, tgl_lahir, asal, email, username, password, tipe) VALUES (?, ?, ?, ?, ?, ?, ?)";

if ($stmt = mysqli_prepare($kon, $query_sql)) {
    mysqli_stmt_bind_param($stmt, "sssssss", $nama, $tgl_lahir, $asal, $email, $userName, $password, $tipe);
    if (mysqli_stmt_execute($stmt)) {
        // Redirect ke halaman login jika berhasil
        header("Location: ../login.html");
    } else {
        // Menampilkan pesan kesalahan jika gagal
        echo "Pendaftaran Gagal: " . mysqli_error($kon);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($kon);
}

mysqli_close($kon);
?>
