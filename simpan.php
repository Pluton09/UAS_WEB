<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_bus'];
    $tujuan = $_POST['tujuan'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah_penumpang'];

    $stmt = $koneksi->prepare("INSERT INTO bus (nama_bus, tujuan, tanggal, jumlah_penumpang) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $nama, $tujuan, $tanggal, $jumlah);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . $stmt->error;
    }

    $stmt->close();
}
?>
