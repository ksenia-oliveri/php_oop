<?php

namespace App;

trait HasHungary 
{
    public function hungary()
    {
        print_r($this->getName() . ' is hungary');
    }
}