
Ada soal cerita : Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. Guru 
tersebut memiliki data setiap siswa terdrir dari nama dan nilai. Bantu guru ini mencetak daftar 
nilai siswa yang mencapai nilai di atas rata-rata kelas. Dengan ketentuan nama dan nilai siswa 
Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90
<?php
// Langkah 1: Menyimpan data siswa
$siswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

// Langkah 2: Menghitung rata-rata nilai
$totalNilai = 0;
foreach ($siswa as $nilai) {
    $totalNilai += $nilai[1];
}
$rataRata = $totalNilai / count($siswa);

// Langkah 3: Mencetak daftar nilai di atas rata-rata
echo "Daftar nilai siswa di atas rata-rata (Rata-rata: $rataRata):\n";
foreach ($siswa as $nilai) {
    if ($nilai[1] > $rataRata) {
        echo $nilai[0] . " - " . $nilai[1] . "\n";
    }
}
?>
