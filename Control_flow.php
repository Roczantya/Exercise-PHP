<?php 
   function hitungUsia($tanggal_lahir) {
    $tgl_lahir = new DateTime($tanggal_lahir); // Mengambil tanggal lahir dari parameter
    $hariini = new DateTime('today'); // Membuat objek DateTime untuk hari ini
    $age = $tgl_lahir->diff($hariini); // Menghitung selisih tahun (umur)
    return $age->y; // Mengembalikan usia dalam tahun
}

function isAdult($person) {
    $age = hitungUsia($person->getBirthdate()); // Menghitung usia menggunakan fungsi terpisah
    return $age >= 18 ?  "You are Adult now" : "You are Minor"; // Mengembalikan status dewasa atau minor
}

    ?>
