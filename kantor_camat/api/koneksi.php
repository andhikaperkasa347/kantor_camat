<?php
$conn = mysqli_connect("localhost", "root", "", "kantor_camat");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
