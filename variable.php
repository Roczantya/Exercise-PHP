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
        echo "<h2>Name: " . htmlspecialchars($this->name) . "</h2>";
    }

    public function displayAge() {
        $age = $this->calculateAge();
        echo "<p>Age: " . htmlspecialchars($age) . "</p>";
    }

    public function displayGender() {
        echo "<p>Gender: " . htmlspecialchars($this->gender) . "</p>";
    }

    public function displayGPA() {
        echo "<p>GPA: " . htmlspecialchars($this->gpa) . "</p>";
    }

    public function displayStudentStatus() {
        echo "<p>Student Status: " . ($this->isStudent ? "Active" : "Inactive") . "</p>";
    }

    private function calculateAge() {
        $birthdate = new DateTime($this->birthdate);
        $today = new DateTime();
        return $today->diff($birthdate)->y; // Calculate age in years
    }
}
    
?>