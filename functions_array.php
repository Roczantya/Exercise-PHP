<?php 
    include 'variable.php'; // Menyertakan file variable.php
    
    // Membuat objek Person berdasarkan array siswa
    $people = [];
    
    $people[] = new Person('Tiffany', '2005-04-01', 'female', 3.73, true);
    $people[] = new Person('Nina', '2004-05-15', 'female', 3.85, true);
    $people[] = new Person('Tania', '2003-06-10', 'female', 3.65, false);
    $people[] = new Person('Budi', '2003-07-20', 'male', 3.80, true);
    $people[] = new Person('Mike', '2002-08-25', 'male', 3.90, true);
    
    // Menampilkan informasi untuk setiap objek
    foreach ($people as $person) {
        $person->displayName();
        $person->displayAge();
        $person->displayGender();
        $person->displayGPA();
        $person->displayStudentStatus();
        echo "\n"; // Memberi jarak antar informasi
    }
?>