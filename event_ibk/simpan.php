<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nohp = $_POST['nohp'];

$query = "INSERT INTO peserta (nama, kelas, nohp)
VALUES ('$nama','$kelas','$nohp')";

if (mysqli_query($conn, $query)) {
    echo "
    <script>
        alert('Pendaftaran berhasil! 🎉');
        window.location='index.php';
    </script>
    ";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>