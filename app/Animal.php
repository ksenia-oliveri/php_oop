<?php
namespace App;
abstract class Animal implements AnimalInterface
{
    private string $name;
    private string $size;
    private int $age;
    private array $whatEat;

    public function __construct($name, $size, $age, $whatEat)
    {
        $this->name = $name;
        $this->size = $size;
        $this->age = $age;
        $this->whatEat = $whatEat;
    }
   

    public function setName($value) 
    {
        $this->name = $value;
    }

   public function getName() {
    return $this->name;
   } 

   public function setSize($value) 
   {
       $this->size = $value;
   }

  public function getSize():string {
   return $this->size;
  } 

  public function setAge($value) 
  {
      $this->age = $value;
  }

 public function getAge():int {
  return $this->age;
 } 

 public function setWhatEat($value) 
 {
     $this->whatEat = $value;
 }

public function getWhatEat() {
 return $this->whatEat;
} 

}