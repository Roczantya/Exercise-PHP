<?php 
     include 'variable.php'; // Menyertakan file variable.php
     include 'Control_flow.php'; // Menyertakan file age_check.php
 
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
         $age = $person->calculateAge(); // Hitung umur
         echo "Usia: $age tahun\n"; // Menampilkan umur
 
         if (isAdult($person)) { // Memanggil fungsi isAdult
             echo "You are an adult now.\n"; // Jika dewasa
         } else {
             echo "You are a minor.\n"; // Jika tidak dewasa
         }
         
         echo "\n"; // Memberi jarak antar informasi
     }
?>