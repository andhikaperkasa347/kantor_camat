<?php
include "koneksi.php";

/* Ambil antrian paling awal */
$data = mysqli_query($conn,
"SELECT * FROM antrian ORDER BY id ASC LIMIT 1");

$antrian = mysqli_fetch_assoc($data);

if ($antrian) {

    // HAPUS dari database
    mysqli_query($conn,
    "DELETE FROM antrian WHERE id=".$antrian['id']);

    // Kirim data ke JS (buat suara & tampilan)
    echo json_encode($antrian);

} else {
    echo json_encode(null);
}
