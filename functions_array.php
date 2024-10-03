<?php 
    include 'variable.php'; // Menyertakan file variable.php

    // Membuat objek Person berdasarkan array siswa
    $people = [];
    
    $people[] = new Person('Tiffany', '2005-04-01', 'female', 3.73, true);
    $people[] = new Person('Nina', '2007-05-15', 'female', 3.85, true);
    $people[] = new Person('Tania', '2009-06-10', 'female', 3.65, false);
    $people[] = new Person('Budi', '2003-07-20', 'male', 3.80, true);
    $people[] = new Person('Mike', '2002-08-25', 'male', 3.90, true);
    
    // Menampilkan informasi untuk setiap objek
    foreach ($people as $person) {
        $person->displayName();
        $person->displayAge();
        $person->displayGender();
        $person->displayGPA();
        $person->displayStudentStatus();

        if ($person->isAdult()) {
            echo "Status: Sudah dewasa\n"; // Jika sudah dewasa
        } else {
            echo "Status: Belum dewasa\n"; // Jika belum dewasa
        }
        echo "\n"; // Memberi jarak antar informasi
    }
?>
