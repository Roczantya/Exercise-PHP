<?php
include 'variable.php'; // Menyertakan file Data_people.php

function hitungUsia($tanggal_lahir) {
    $tgl_lahir = new DateTime($tanggal_lahir);
    $hari_ini = new DateTime('today');
    return $tgl_lahir->diff($hari_ini)->y; // Mengembalikan usia dalam tahun
}

function displayAgeStatus($person) {
    $age = hitungUsia($person->getBirthdate());
    return ($age >= 18) ? "Status: Adult. Congrats" : "Status: Minor. Don't be naughty";
}

// Mulai dokumen HTML
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Age Status</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .person { margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        h2 { color: #4CAF50; }
    </style>
</head>
<body>
    <h1>Status Setiap Orang</h1>";

// Loop melalui setiap objek Person dan menampilkan status usia mereka
foreach ($people as $person) {
    echo "<div class='person'>";
    echo "<h2>" . $person->getName() . "</h2>";
    echo "<p>" . displayAgeStatus($person) . "</p>";
    echo "</div>";
}

echo "</body>
</html>";
?>
