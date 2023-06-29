<?php
$conn = new mysqli("localhost", "root", "", "crud_flutter");
$nim = $_POST["nim"];
$query = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim='$nim'");
if ($query) {
    echo json_encode([
        'pesan' => 'Sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'Gagal'
    ]);
}
