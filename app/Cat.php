<?php

namespace App;

class Cat extends Animal 
{
    use HasHungary;
    public function makeSound() 
    {
        print_r('meow meow');
    }
}