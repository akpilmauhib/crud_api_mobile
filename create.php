<?php
$conn = new mysqli("localhost", "root", "", "crud_flutter");
$nim = $_POST["nim"];
$nama_mahasiswa = $_POST["nama_mahasiswa"];
$alamat = $_POST["alamat"];
$query = mysqli_query($conn, "INSERT INTO mahasiswa SET nim = '$nim', nama_mahasiswa = '$nama_mahasiswa', alamat = '$alamat'");
if ($query) {
    echo json_encode([
        'pesan' => 'Sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'Gagal'
    ]);
}
