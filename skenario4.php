<?php
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = [2024, 2025, 2026];

echo "Kasus 1 <br>";
echo "$hari[1], $tanggal[9] - $bulan[2] - $tahun[1]";




echo "<br><br>" . "Kasus 2 <br>";
for ($i = 30; $i >= 1; $i--) {
    echo "Anak Ayam Turun $i, mati satu hingga " . $i-1 . "<br>";
};



echo "<br><br>" . "Kasus 3 <br>";
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "$mawar, ";
};
echo "Sholeh punya 12 mawar" . "<br>";
for ($mawar = 21; $mawar >= 10; $mawar-= 4) {
    echo "$mawar, ";
};
echo "Sholeh memberikan ibunya 3 mawar";



echo "<br><br>" . "Kasus 4 <br>";
$suasana_ambyar = [
        "galau" => "Mesin Waktu - Budi Doremi",
        "bersemangat" => "Selamat Pagi - Ran",
        "marah" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"
];
$suasana_Ambyar = "galau";
foreach ($suasana_ambyar as $suasana => $lagu) {
    $Ambyar = "Suasana Ambyar lagi : $suasana. Dia lagi dengerin $lagu";
    echo $Ambyar . "<br>";
};


?>
<footer>
        <p>Dibuat oleh: Revano & Fadly</p>
    </footer>