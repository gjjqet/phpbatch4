<?php

// Note:: void is a return only for type declaration indication assign . the function does not return a value . void available for PHP 7.1 to above


class Returntypehinting{

    public $name;

    public function setname(string $val):void{
        $this->name = $val;
    }

    public function getname():string{
        return $this->name;
    }

}

class Person extends Returntypehinting{
    public $userid;
    public $username;

    public function setinfo(array $arr):void{
        $this->userid = $arr["id"];
        $this->username = $arr["name"];
    }
}

echo "This is Return Type Hinting <br/>";

$obj1 = new Returntypehinting();
$obj1->setname("Aung Kyaw Kyaw");
echo $obj1->getname(); // Aung Kyaw Kyaw


echo "<br/>";

$obj2 = new Person();
$obj2->setname("Su Su");
echo $obj2->getname(); // Su Su 

echo "<br/>";

$datas = ["id"=>1,"name"=>"Honey Nway Oo"];

$obj2-> setinfo($datas);

echo $obj2->userid; // 1
echo "<br/>";
echo $obj2->username; // Noney Nway Oo

echo "<hr/>";


?>