<?php
include "koneksi.php";

$data = mysqli_query($conn, "SELECT * FROM antrian ORDER BY id ASC");

$hasil = [];
while ($row = mysqli_fetch_assoc($data)) {
    $hasil[] = $row;
}

echo json_encode($hasil);
