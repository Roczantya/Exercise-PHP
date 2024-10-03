<?php 
  function hitungUsia($tanggal_lahir) {
    $tgl_lahir = new DateTime($tanggal_lahir); // Mengambil tanggal lahir dari parameter
    $hari_ini = new DateTime('today'); // Membuat objek DateTime untuk hari ini
    return $tgl_lahir->diff($hari_ini)->y; // Mengembalikan usia dalam tahun
}

function displayAgeStatus($person) {
    $age = hitungUsia($person->getBirthdate()); // Menghitung usia menggunakan fungsi terpisah

    // Menampilkan usia dan status dewasa atau minor
    if ($age >= 18) {
        echo "Status: Adult. Congrats\n"; // Jika sudah dewasa
    } else {
        echo "Status: Minor. Don't be naughty\n"; // Jika belum dewasa
    }
}
    ?>
