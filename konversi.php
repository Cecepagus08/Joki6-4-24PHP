<?php
function konversiNilai($nilai) {
    if ($nilai >= 80 && $nilai <= 100) {
        return 'A';
    } elseif ($nilai >= 70 && $nilai <= 79) {
        return 'B';
    } elseif ($nilai >= 60 && $nilai <= 69) {
        return 'C';
    } elseif ($nilai >= 50 && $nilai <= 59) {
        return 'D';
    } elseif ($nilai >= 0 && $nilai <= 49) {
        return 'E';
    } else {
        return 'Nilai tidak valid';
    }
}

// Nilai yang ingin dikonversi
$nilai = 73;
$hasilKonversi = konversiNilai($nilai);

echo "Nilai Angka: $nilai<br>";
echo "Nilai Huruf: $hasilKonversi";
?>
