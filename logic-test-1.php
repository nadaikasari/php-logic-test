<?php

function hitungPasangKaosKaki(array $kaosKaki): int
{
    $jumlahKaosKaki = [];

    foreach ($kaosKaki as $satuan) {
        if (!isset($jumlahKaosKaki[$satuan])) {
            $jumlahKaosKaki[$satuan] = 0;
        }
        $jumlahKaosKaki[$satuan]++;
    }

    $totalPasang = 0;

    foreach ($jumlahKaosKaki as $jumlah) {
        $totalPasang += intdiv($jumlah, 2);
    }

    return $totalPasang;
}

// Running
$input1 = [10, 20, 20, 10, 10, 30, 50, 10, 20];
$input2 = [6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5];
$input3 = [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];

echo "Output 1: " . hitungPasangKaosKaki($input1) . "<br>";
echo "Output 2: " . hitungPasangKaosKaki($input2) . "<br>";
echo "Output 3: " . hitungPasangKaosKaki($input3) . "<br>";

