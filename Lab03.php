<?php
/*
Name: [Sayeed Asrar]
Student ID: [#1]
Course: Web Information Systems | PHP OOP Lab_03
*/

class Library {
    const MAX_BOOKS = 3; // Constant because this value should never change during program execution
}
echo "Maximum books allowed: " . Library::MAX_BOOKS . "<br>";


class StudentCounter {
    public static $count = 0;

    public static function addStudent() {
        self::$count++;
    }
}


StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Total students: " . StudentCounter::$count . "<br>";


abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        echo "Car engine started.<br>";
    }
}

class Bike extends Vehicle {
    public function start() {
        echo "Bike started.<br>";
    }
}


$car = new Car();
$bike = new Bike();

$car->start();
$bike->start();
?>
