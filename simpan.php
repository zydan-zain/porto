<?php
include 'connect.php';

$nama    = $_POST['nama'];
$email   = $_POST['email'];
$subject = $_POST['subject'];
$pesan   = $_POST['pesan'];

$stmt = $conn->prepare("INSERT INTO porto_db (nama, email, subjek, pesan) VALUES (?, ?, ?, ?)");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ssss", $nama, $email, $subject, $pesan);

if ($stmt->execute()) {
    echo "Data berhasil disimpan ke porto_db. <a href='index.php'>Kembali</a>";
} else {
    echo "Error saat menyimpan data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
