<?php
include 'variable.php'; // Menyertakan file variable.php

function hitungUsia($tanggal_lahir) {
    $tgl_lahir = new DateTime($tanggal_lahir); // Mendapatkan tanggal lahir dari parameter
    $hari_ini = new DateTime('today'); // Membuat objek DateTime untuk hari ini
    return $tgl_lahir->diff($hari_ini)->y; // Mengembalikan usia dalam tahun
}

function displayAgeStatus($person) {
    $age = hitungUsia($person->getBirthdate()); // Hitung usia menggunakan fungsi terpisah

    // Menampilkan status dewasa atau minor
    if ($age >= 18) {
        return "Status: Adult. Congrats"; // Jika sudah dewasa
    } else {
        return "Status: Minor. Don't be naughty"; // Jika masih minor
    }
}

// Membuat array objek Person
$people = [];
$people[] = new Person('Tiffany', '2005-04-01', 'female', 3.73, true);
$people[] = new Person('Nina', '2007-05-15', 'female', 3.85, true);
$people[] = new Person('Tania', '2009-06-10', 'female', 3.65, false);
$people[] = new Person('Budi', '2003-07-20', 'male', 3.80, true);
$people[] = new Person('Mike', '2002-08-25', 'male', 3.90, true);

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
    echo "<h2>" . $person->getName() . "</h2>"; // Menampilkan nama
    echo "<p>" . displayAgeStatus($person) . "</p>"; // Menampilkan status usia
    echo "</div>"; // Menutup div untuk orang
}

echo "</body>
</html>";
?>
