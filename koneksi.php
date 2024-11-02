<?php
$koneksi = mysqli_connect("localhost", "root", "", "ronda_malam");
if (!$koneksi) {
    $error = "Gagal Koneksi...";
}
?>