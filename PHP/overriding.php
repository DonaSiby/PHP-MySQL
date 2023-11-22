<?php
class Helloo {
  public $name = "Dona";
  public function sayHello()
  {
    echo "HELLO ".$this->name;

  }
}
class childClass extends Helloo {
  public function sayHello(){
    echo "<br> Overriding";
  }
}
$object = new Helloo;
$object1 = new childClass;
$object->sayHello();
$object1->sayHello();
?>