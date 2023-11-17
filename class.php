<?php
class Car {
  public $brand;
  public $model;
  public function startEngine(){
    echo $this->brand." Engine Started";
  }
}
$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->model = "Camry";
$myCar->startEngine(); 
?>