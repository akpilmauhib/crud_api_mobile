<?php
$conn = new mysqli("localhost", "root", "", "crud_flutter");
$id = $_POST["id"];
$nim = $_POST["nim"];
$nama_mahasiswa = $_POST["nama_mahasiswa"];
$alamat = $_POST["alamat"];
$query = mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', alamat='$alamat' WHERE id='$id'");
if ($query) {
    echo json_encode([
        'pesan' => 'Sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'Gagal'
    ]);
}
