<?php

class Language{

    public $name;
    public $citizen;

    public function __construct($val1,$val2){
        $this->name = $val1;
        $this->citizen = $val2;
    }

    public function speak(){
        echo "Say Something...<br/>";
    }
   
}

class Burmese extends Language{
    public function speak(){
        echo "Hello Mingalarpar...<br/>";
    }
}

class Thai extends Language{
    public function speak(){
        echo "Hello Sawadikha...<br/>";
    }
}

echo "This is Polymorphism <br/>";



$obj1 = new Burmese("Honey Nway OO","Burmese");
echo $obj1->name; // Honey Nway Oo
echo "<br/>";
echo $obj1->citizen; // Burmese
echo "<br/>";
echo $obj1->speak();

$obj2 = new Thai("Ma Ma Mya","Thai");
echo $obj2->name;
echo "<br/>";
echo $obj2->citizen;
echo "<br/>";
echo $obj2->speak();



echo "<hr/>";

?>