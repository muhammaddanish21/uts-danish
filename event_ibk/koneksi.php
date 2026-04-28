<?php
$conn = mysqli_connect("localhost", "root", "", "event_ibk");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>