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
        return "Nama saya " . $this->getName() . "<br>";
    }

    // Method untuk menghitung dan menampilkan umur
    public function displayAge() {
        $tgl_lahir = new DateTime($this->birthdate); // Membuat objek DateTime dari tanggal lahir
        $hariini = new DateTime('today'); // Membuat objek DateTime untuk hari ini
        $age = $tgl_lahir->diff($hariini); // Menghitung selisih tahun (umur)
        return "Usia: " . $age->y . " tahun, " . $age->m . " bulan, " . $age->d . " hari<br>"; // Menggunakan <br> untuk pemisah baris
    }

    // Method untuk menampilkan gender
    public function displayGender() {
        return "Gender saya " . $this->getGender() . "<br>";
    }

    // Method untuk menampilkan GPA
    public function displayGPA() {
        return "GPA saya " . $this->getGPAScore() . "<br>";
    }

    // Method untuk menampilkan status mahasiswa
    public function displayStudentStatus() {
        return "Beliau memang " . ($this->getIsStudent() ? 'seorang mahasiswa.' : 'bukan mahasiswa.') . "<br>";
    }
}

// Membuat array objek Person
$people = [];
$people[] = new Person('Tiffany', '2005-04-01', 'female', 3.73, true);
$people[] = new Person('Nina', '2004-05-15', 'female', 3.85, true);
$people[] = new Person('Tania', '2003-06-10', 'female', 3.65, false);
$people[] = new Person('Budi', '2003-07-20', 'male', 3.80, true);
$people[] = new Person('Mike', '2002-08-25', 'male', 3.90, true);

// Mulai dokumen HTML
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>People Information</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .person { margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        h2 { color: #4CAF50; }
    </style>
</head>
<body>
    <h1>People Information</h1>";

// Menampilkan informasi untuk setiap orang
foreach ($people as $person) {
    echo "<div class='person'>";
    echo $person->displayName();
    echo $person->displayAge();
    echo $person->displayGender();
    echo $person->displayGPA();
    echo $person->displayStudentStatus();
    echo "</div>";
}

echo "</body>
</html>";
?>
