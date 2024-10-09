<?php

abstract class Vehicle{
    abstract public function start();
    abstract public function stop();
}

class Car extends Vehicle{
    public function start(){
        echo "Car Started <br/>";
    }

    public function stop(){
        echo "Car Stopped <br/>";
    }
}

class Ebike extends Vehicle{
    public function start(){
        echo "Ebike Started <br/>";
    }

    public function stop(){
        echo "Ebike Stopped <br/>";
    }
}


echo "This is Polymorphism Concert with abstract<br/>";

$obj1 = new Car();
$obj1->start();
$obj1->stop();


$obj2 = new Ebike();
$obj2->start();
$obj2->stop();

echo "<hr/>";


?>