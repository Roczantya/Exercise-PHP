<?php 
    function isAdult($person) {
        $tgl_lahir = new DateTime($person->getBirthdate()); // Mengambil tanggal lahir dari objek
        $hariini = new DateTime('today'); // Membuat objek DateTime untuk hari ini
        $age = $tgl_lahir->diff($hariini); // Menghitung selisih tahun (umur)
        return $age->y >= 18; // Mengembalikan true jika dewasa, false jika tidak
    }

    ?>
