<?php 
    include 'variable.php'; // Menyertakan file variable.php
    // Membuat objek Person berdasarkan array siswa
    function greet($person) {
        return "Hello " . $person->getName() . "!"; // Mengembalikan sapaan
    }
    
    // Menampilkan sapaan untuk setiap objek
    foreach ($people as $orang) {
        echo "<h3>" . greet($orang) . "</h3><br>"; // Menampilkan sapaan
    }
    ?>
?>
