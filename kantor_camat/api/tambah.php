<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$layanan = $_POST['layanan'];

mysqli_query($conn, "INSERT INTO antrian (nama, nik, layanan) 
VALUES ('$nama','$nik','$layanan')");

echo "ok";
