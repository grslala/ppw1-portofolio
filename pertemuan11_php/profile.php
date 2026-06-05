<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>
    <h2>Profil Grisella</h2>
    <?php
        $nama = "Grisella Aurelia Disanda";
        $nim = "25/566497/SV/27087";
        $prodi = "Teknologi Rekayasa Perangkat Lunak";
        $asal_kota = "Solo";
    ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr><td><b>Nama</b></td><td><?php echo $nama; ?></td></tr>
        <tr><td><b>NIM</b></td><td><?php echo $nim; ?></td></tr>
        <tr><td><b>Prodi</b></td><td><?php echo $prodi; ?></td></tr>
        <tr><td><b>Asal Kota</b></td><td><?php echo $asal_kota; ?></td></tr>
    </table>
</body>
</html>