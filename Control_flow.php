<?php 
   fpublic function isAdult() {
    $tgl_lahir = new DateTime($this->birthdate); // Membuat objek DateTime dari tanggal lahir
    $hariini = new DateTime('today'); // Membuat objek DateTime untuk hari ini
    $age = $tgl_lahir->diff($hariini); // Menghitung selisih tahun (umur)
    return $age->y >= 18; // Mengembalikan true jika dewasa, false jika tidak
}

    ?>
