<?php
class Person {
    // Properties
    private $name;
    private $birthdate;
    private $gender;
    private $GPAScore;
    private $is_student;

    // Constructor
    public function __construct($name, $birthdate, $gender, $GPAScore, $is_student) {
        $this->name = $name;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
        $this->GPAScore = $GPAScore;
        $this->is_student = $is_student;
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }
    public function getBirthdate() {
        return $this->birthdate;
    }
    public function getGender() {
        return $this->gender;
    }
    public function getGPAScore() {
        return $this->GPAScore;
    }
    public function getIsStudent() {
        return $this->is_student;
    }

    // Display methods
    public function displayName() {
        return "Nama: " . $this->getName() . "<br>";
    }

    public function displayAge() {
        $tgl_lahir = new DateTime($this->birthdate);
        $hariini = new DateTime('today');
        $age = $tgl_lahir->diff($hariini);
        return "Usia: " . $age->y . " tahun, " . $age->m . " bulan, " . $age->d . " hari<br>";
    }

    public function displayGender() {
        return "Gender: " . $this->getGender() . "<br>";
    }

    public function displayGPA() {
        return "GPA: " . $this->getGPAScore() . "<br>";
    }

    public function displayStudentStatus() {
        return "Beliau memang " . ($this->getIsStudent() ? 'seorang mahasiswa.' : 'bukan mahasiswa.') . "<br>";
    }
}

$people = [];
$people[] = new Person('Tiffany', '2005-04-01', 'female', 3.73, true);
$people[] = new Person('Nina', '2007-05-15', 'female', 0.0, true);
$people[] = new Person('Tania', '2009-06-10', 'female', 0.0, false);
$people[] = new Person('Budi', '2003-07-20', 'male', 3.80, true);
$people[] = new Person('Santika', '2003-09-15', 'female', 3.99, true);

foreach ($people as $person) {
    $person->displayName();
    $person->displayAge();
    $person->displayGender();
    $person->displayGPA();
    $person->displayStudentStatus();
}
// $people[] = new Person('Mike', '2002-08-25', 'male', 3.90, true); Kirim semua output yang ditangkap ke browser
// ?>
