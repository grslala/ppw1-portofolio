<!DOCTYPE html>
<html>
<head>
    <title>HitungIMT</title>
</head>
<body>
    <h2>Kalkulator Indeks Masa Tubuh (IMT)</h2>
    <?php
        function hitungIMT($berat, $tinggi_cm){
            $tinggi_m = $tinggi_cm / 100;
            $imt = $berat / ($tinggi_m * $tinggi_m);

            if ($imt < 18.5) return 'Kurus';
            elseif ($imt >= 18.5 && $imt <= 24.9) return 'Normal';
            elseif ($imt >= 25 && $imt <= 29.9) return 'Gemuk';
            else return 'Obesitas';
        }

        $berat_saya = 55; // kg
        $tinggi_saya = 160; // cm
        $kategori = hitungIMT($berat_saya, $tinggi_saya);
    ?>
    <p>Berat Badan: <?php echo $berat_saya; ?> kg</p>
    <p>Tinggi Badan: <?php echo $tinggi_saya; ?> cm</p>
    <p>Kategori IMT: <b><?php echo $kategori; ?></b></p>
</body>
</html>