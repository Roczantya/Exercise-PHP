<?php
include 'variable.php'; // Menyertakan file Data_people.php

ob_start(); // Memulai output buffering

// Mulai dokumen HTML
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>People Information</title>
    <style>
        body { font-family: rial, Helvetica, sans-serif; }
        .person { margin-bottom: 20px; padding: 10px; border: 1.5px solid #ccc; border-radius: 5px; }
        h2 { color: #4CAF50; }
    </style>
</head>
<body>
    <h1>People Information</h1>";

// Menampilkan informasi untuk setiap orang
foreach ($people as $person) {
    echo "<div class='person'>";
    echo $person->displayName();
    echo $person->displayAge();
    echo $person->displayGender();
    echo $person->displayGPA();
    echo $person->displayStudentStatus();
    echo "</div>";
}

echo "</body>
</html>";

ob_end_flush(); // Kirim semua output yang ditangkap ke browser
?>

