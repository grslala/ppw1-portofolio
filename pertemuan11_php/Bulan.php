<!DOCTYPE html>
<html>
<head>
    <title>Bulan</title>
</head>
<body>
    <h2>Info Bulan Sekarang</h2>
    <?php
        $bulan_sekarang = date("F"); 
        $total_hari_bulan_ini = date("t"); 
        $tanggal_hari_ini = date("j"); 
        
        $sisa_hari = $total_hari_bulan_ini - $tanggal_hari_ini;
    ?>
    <p>Bulan sekarang adalah: <b><?php echo $bulan_sekarang; ?></b></p>
    <p>Sisa hari di bulan ini: <b><?php echo $sisa_hari; ?> hari</b></p>
</body>
</html>