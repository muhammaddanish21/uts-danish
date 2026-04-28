<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Event IBK Cemara</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">

    <!-- HEADER -->
    <div class="header">
        <h2>🎉 Event Sekolah Rumah IBK Cemara</h2>
        <p>📅 20 Februari 2026</p>
        <p>📍 Aula Rumah IBK Cemara</p>
    </div>

    <!-- FORM -->
    <div class="card">
        <h3>Form Pendaftaran Peserta</h3>

        <form action="simpan.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="text" name="kelas" placeholder="Kelas" required>
            <input type="text" name="nohp" placeholder="No HP" required>

            <button type="submit">Daftar Sekarang</button>
        </form>
    </div>

    <!-- LIST PESERTA -->
    <div class="card">
        <h3>Peserta Terdaftar</h3>

        <?php
        include 'koneksi.php';

        $data = mysqli_query($conn, "SELECT * FROM peserta");

        while($d = mysqli_fetch_array($data)){
            echo "<p>".$d['nama']." - ".$d['kelas']."</p>";
        }
        ?>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <p>© 2026 Event IBK Cemara</p>
        <p>Web by Uqi ✨</p>
    </div>

</div>

</body>
</html>