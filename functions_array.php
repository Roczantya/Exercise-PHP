<?php 
include 'variable.php'; // Menyertakan file variable.php

// Fungsi untuk menyapa setiap objek
function greet($person) {
    return "Hello " . $person->getName() . "!"; // Mengembalikan sapaan
}

// Mulai dokumen HTML
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Greetings</title>
</head>
<body>
    <h1>Greetings</h1>";

// Menampilkan sapaan untuk setiap objek
foreach ($people as $orang) {
    echo "<h3>" . greet($orang) . "</h3>"; // Menampilkan sapaan
}

echo "</body>
</html>";
?>
