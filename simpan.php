<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_bus = $_POST['nama_bus'];
    $tujuan = $_POST['tujuan'];
    $tanggal = $_POST['tanggal'];
    $jumlah_penumpang = $_POST['jumlah_penumpang'];

    $sql = "INSERT INTO bus (nama_bus, tujuan, tanggal, jumlah_penumpang) 
            VALUES ('$nama_bus', '$tujuan', '$tanggal', '$jumlah_penumpang')";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: uas.php"); // kembali ke halaman utama
    } else {
        echo "Gagal menyimpan data: " . $koneksi->error;
    }
}
?>
