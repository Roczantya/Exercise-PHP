<?php
class Person {
    // Properti atau atribut
    private $name;
    private $birthdate;
    private $gender;
    private $GPAScore;
    private $is_student;

    // Constructor untuk menginisialisasi objek
    public function __construct($name, $birthdate, $gender, $GPAScore, $is_student) {
        $this->name = $name;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
        $this->GPAScore = $GPAScore;
        $this->is_student = $is_student;
    }

    // Getter untuk nama
    public function getName() {
        return $this->name;
    }

    // Setter untuk nama
    public function setName($name) {
        $this->name = $name;
    }

    // Getter untuk tanggal lahir
    public function getBirthdate() {
        return $this->birthdate;
    }

    // Setter untuk tanggal lahir
    public function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    // Getter untuk gender
    public function getGender() {
        return $this->gender;
    }

    // Setter untuk gender
    public function setGender($gender) {
        $this->gender = $gender;
    }

    // Getter untuk GPA
    public function getGPAScore() {
        return $this->GPAScore;
    }

    // Setter untuk GPA
    public function setGPAScore($GPAScore) {
        $this->GPAScore = $GPAScore;
    }

    // Getter untuk status mahasiswa
    public function getIsStudent() {
        return $this->is_student;
    }

    // Setter untuk status mahasiswa
    public function setIsStudent($is_student) {
        $this->is_student = $is_student;
    }

    // Method untuk menampilkan nama
    public function displayName() {
        echo "Nama saya " . $this->getName() . "\n";
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
        echo "Gender saya " . $this->getGender() . "\n";
    }

    // Method untuk menampilkan GPA
    public function displayGPA() {
        echo "GPA saya " . $this->getGPAScore() . "\n";
    }

    // Method untuk menampilkan status mahasiswa
    public function displayStudentStatus() {
        echo "Beliau memang " . ($this->getIsStudent() ? 'seorang mahasiswa.' : 'bukan mahasiswa.') . "\n";
    }

    public function isAdult() {
        $tgl_lahir = new DateTime($this->birthdate);
        $hariini = new DateTime('today');
        $age = $tgl_lahir->diff($hariini);
        return $age->y >= 18; // Mengembalikan true jika dewasa, false jika tidak
    }
}
?>