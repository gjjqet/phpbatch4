<?php

//property_exists

//construct
//destruct
//get
//set
//invoke
//tostring

class Mymagicmethod{

     public $num;
     public $name;
     public $age;

   public function __construct($val){

     if(property_exists("Mymagicmethod","num")){
          $this->num = $val;

          echo $this->num;
     }

   }

}

class Magicone{
     public $greeting = "Hello <br/>";
     public $city = "Yangon <br/>";

     public function __get($val){
          echo "You not yet defined this $val property <br/>";
     }

     public function __set($var,$val){
          echo "You not defined this $var property so you can set $val value <br/>";
     }
}

class Magictwo{

     public function getname(){
          echo "My name is Honey Nway Oo <br/>";
     }

     public static function getcity(){
          echo "I live in Yangon <br/>";
     }

     public function __call($method,$parameter){
          echo "You are not defined yet this $method method " . "<pre>".print_r($parameter,true)."</pre>" . " will not work";
     }

     public static function __callstatic($method,$parameter){
          echo "You are not defined yet this $method method " . "<pre>".print_r($parameter,true)."</pre>" . " will not work";
     }

}


class Invoke{

     public function __invoke(){
          echo 'You are trying to invoke class object as method';
     }

}

class Getobject{

     public function __toString(){
          echo "Hay you have not written any property";
     }

}


$obj = new Mymagicmethod(100);

echo "<hr/>";

$magicone = new Magicone();
echo $magicone->greeting;
echo $magicone->thanks;
echo $magicone->city;

$magicone->gender = "female";
echo $magicone->city;

echo "<hr/>";

$obj2 = new Magictwo();

$obj2->getname();
$obj2::getcity();

$obj2->getgender("female","male");

$obj2::getage("22","25");

echo "<hr/>";

$obj3 = new Invoke();
echo $obj3();

echo "<hr/>";

$obj4 = new Getobject();
echo $obj4;

echo "<hr/>";
    
?>