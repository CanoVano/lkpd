<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Harian Andi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        h1, h2 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-left: 5px solid #007BFF;
        }
        footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Jadwal Harian Andi</h1>
    <p>Berikut adalah jadwal harian Andi berdasarkan waktu:</p>

    <?php
    $jam = date("15:40"); // Mengambil waktu saat ini dalam format 24 jam (HH:mm)

    echo "<ul>";

    if ($jam >= "15:30" && $jam <= "15:45") {
        echo "<li>($jam) Andi Persiapan Pulang Sekolah</li>";
    } 
    else if ($jam > "15:45" && $jam <= "15:50") {
        echo "<li>($jam) Andi Tiba di Rumah</li>";
    } 
    else if ($jam > "15:50" && $jam <= "15:55") {
        echo "<li>($jam) Andi Membeli Bumbu Masak</li>";
    } 
    else if ($jam > "15:55" && $jam <= "17:55") {
        if ($jam <= "17:55") {
            echo "<li>($jam) Andi Mengerjakan Tugas Sekolah (2 Jam Penuh)</li>";
        } else {
            echo "<li>($jam) Andi Sedang Istirahat Setelah Tugas</li>";
        }
    } 
    else if ($jam > "17:55" && $jam <= "18:05") {
        echo "<li>($jam) Andi Mandi, Persiapan Untuk Mengaji</li>";
    } 
    else if ($jam > "18:05" && $jam <= "18:35") {
        echo "<li>($jam) Andi Mengaji (30 Menit)</li>";
    } 
    else if ($jam > "18:35" && $jam <= "18:45") {
        echo "<li>($jam) Andi Sholat Maghrib</li>";
    } 
    else if ($jam > "18:45" && $jam <= "19:15") {
        if ($jam <= "19:15") {
            echo "<li>($jam) Andi Makan Malam (Selesai Sebelum Sholat Isya)</li>";
        } else {
            echo "<li>($jam) Andi Bersiap Untuk Sholat Isya</li>";
        }
    } 
    else if ($jam > "19:15" && $jam <= "19:25") {
        echo "<li>($jam) Andi Sholat Isya</li>";
    } 
    else if ($jam > "19:25" && $jam <= "19:55") {
        echo "<li>($jam) Andi Chatting Dengan Raya Tentang Festival Kesenian Budaya</li>";
    } 
    else if ($jam > "19:55" && $jam <= "20:25") {
        echo "<li>($jam) Andi Menghafalkan Dialog Untuk Festival Kesenian Budaya</li>";
    } 
    else if ($jam > "20:25" && $jam <= "20:55") {
        echo "<li>($jam) Andi Mengobrol Dengan Keluarga (30 Menit)</li>";
    } 
    else if ($jam > "20:55") {
        echo "<li>($jam) Andi Persiapan Tidur</li>";
    }

    echo "</ul>";
    ?>

    <footer>
        <p>Dibuat oleh: Revano & Fadly</p>
    </footer>
</body>
</html>