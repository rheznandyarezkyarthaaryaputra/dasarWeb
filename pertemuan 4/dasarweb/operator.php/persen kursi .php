Ada soal cerita : Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi 
telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut?
<?php
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Persentase kursi yang masih kosong adalah: " . $persentaseKursiKosong . "%";
?>
