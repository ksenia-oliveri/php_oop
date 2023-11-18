<?php
use App\Cat;
use App\Dog;


require_once('../vendor/autoload.php');


$dog = new Dog('Alisa', 'medium', 1, ['croccantini', 'meat', 'yogurt']);
$dog->setWhatEat(['meat', 'pasta']);
$dog->hungary();

$cat = new Cat('Loras', 'big', 4, ['fish', 'meat']);
$cat->makeSound();
$cat->hungary();


