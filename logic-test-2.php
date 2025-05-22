<?php

function hitungKataValid($kalimat) {
    $kataArray = explode(' ', $kalimat);
    $jumlah = 0;

    foreach ($kataArray as $kata) {
        // Hapus tanda baca umum di akhir kata
        $kata = rtrim($kata, ".,!?");

        if (preg_match('/^[a-zA-Z\-]+$/', $kata)) {
            $jumlah++;
        }
    }

    return $jumlah;
}

// Running
$input1 = "Saat meng*ecat tembok, Agung dib_antu oleh Raihan.";
$input2 = "Berapa u(mur minimal[ untuk !mengurus ktp?";
$input3 = "Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.";

echo "Output 1: " . hitungKataValid($input1) . "<br>";
echo "Output 2: " . hitungKataValid($input2) . "<br>";
echo "Output 3: " . hitungKataValid($input3) . "<br>";
