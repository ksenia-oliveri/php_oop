<?php

namespace App;

class Dog extends Animal {
    use HasHungary;
    public function makeSound() {
        print_r('baw baw');
    }
}