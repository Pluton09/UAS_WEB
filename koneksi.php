<?php
$koneksi = new mysqli("localhost", "root", "", "bus_pariwisata");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
