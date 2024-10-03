<?php
class Person {
    // Properti atau atribut
    public $name;
    public $birthdate;
    public $gender;
    public $GPAScore;
    public $is_student;

    // Constructor untuk menginisialisasi objek
    public function __construct($name, $birthdate, $gender, $GPAScore, $is_student) {
        $this->name = $name;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
        $this->GPAScore = $GPAScore;
        $this->is_student = $is_student;
    }

    // Method untuk menampilkan nama
    public function displayName() {
        echo "Nama saya " . $this->name . "\n";
    }

    // Method untuk menghitung dan menampilkan umur
    public function displayAge() {
        $tgl_lahir = new DateTime($this->birthdate); // Membuat objek DateTime dari tanggal lahir
        $hariini = new DateTime('today'); // Membuat objek DateTime untuk hari ini
        $age = $tgl_lahir->diff($hariini); // Menghitung selisih tahun (umur)
        echo "Usia: " . $age->y . " tahun, " . $age->m . " bulan, " . $age->d . " hari\n"; // Menampilkan umur
    }

    // Method untuk menampilkan gender
    public function displayGender() {
        echo "Gender saya " . $this->gender . "\n";
    }

    // Method untuk menampilkan GPA
    public function displayGPA() {
        echo "GPA saya " . $this->GPAScore . "\n";
    }

    // Method untuk menampilkan status mahasiswa
    public function displayStudentStatus() {
        echo "Beliau memang " . ($this->is_student ? 'seorang mahasiswa.' : 'bukan mahasiswa.') . "\n";
    }
}

// Membuat objek Person
$person = new Person('Tiffany Tjandinegara', '2005-04-01', 'female', 3.73, true);

// Memanggil method untuk menampilkan informasi
$person->displayName();
$person->displayAge();
$person->displayGender();
$person->displayGPA();
$person->displayStudentStatus();

?>
