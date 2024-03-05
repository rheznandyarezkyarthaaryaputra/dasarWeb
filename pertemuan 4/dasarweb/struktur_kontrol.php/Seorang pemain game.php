Ada soal cerita : Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki 
lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris 
pertama “Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain 
mendapatkan hadiah tambahan? (YA/TIDAK)”

<?php
// Skor yang dikumpulkan pemain
$poinPemain = 550; // Misalnya, pemain memiliki 550 poin

// Tampilan baris pertama
echo "Total skor pemain adalah: " . $poinPemain . "<br>";

// Operator ternary untuk menentukan apakah pemain mendapatkan hadiah tambahan
$hadiahTambahan = ($poinPemain > 500) ? "YA" : "TIDAK";

// Tampilan baris kedua
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan;
?>
