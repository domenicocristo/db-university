<?php
class Student {
    public $name;
    public $surname;
    public $registrationNumber;

    public function __construct($name, $surname) {
        $this -> name = $name;
        $this -> surname = $surname;
    }
    
    public function getFullname() {
        return $this -> name . " " . $this -> surname;
    }

    public function __toString() {
        return $this -> getFullname() . ": " . $this -> registrationNumber;
    }
}

$S1 = new Student("Antonio", "D'Angelo");
$S2 = new Student("Nico", "Bianco");
$S3 = new Student("Rocco", "Serra");

$S1 -> registrationNumber = "620033";
$S2 -> registrationNumber = "620034";
$S3 -> registrationNumber = "620035";

echo "S1: " . $S1 -> getFullname() . "<br>";
echo "S2: " . $S2 -> getFullname() . "<br>";
echo "S3: " . $S3 -> getFullname() . "<br>";

echo "<br>--------------------------------------<br><br>";

echo "S1: " . $S1 . "<br>";
echo "S2: " . $S2 . "<br>";
echo "S3: " . $S3 . "<br>";
?>