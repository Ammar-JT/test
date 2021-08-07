<?php
//An example for that is a car interface that has two functions:
interface Car{
  public function engine(string $a);
  public function tireSize() : string;
}

//and here we have one of the two classes that implements car:
class Innova implements Car {
  public function engine(string $a){
    echo $a;
  }

  public function tireSize(): string{
    return '15';
  }
}

//we used the class Innova and its functions which been inherited from interface Car and then overrided:
$car = new Innova;
$car->engine('2.7');
echo '<br>';
echo $car->tireSize();

 ?>
