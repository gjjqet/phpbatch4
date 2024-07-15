<?php


class Myscoperesolutionoperator{

     //Member Constant Variable
     const GREETING = "Hello Friend. Good evening from Thailand";
     const THANKS = "Hi Friend . Thanks for visiting our country";

     public $fullname = "Aung Kyaw Kyaw";


     //Member Method 
     public function sayhifi(){
          echo self::GREETING;
     }

     public function saybye(){
          echo static::THANKS;
     }

     public function __construct(){
          echo "I am start working automatically from Main Class . <br/>";
     }
   
}

class Child1 extends Myscoperesolutionoperator{

}

class Child2 extends Myscoperesolutionoperator{

     //Member Constant Variable
     const GREETING = "Hello Students. Good evening from Srilanka";
     const THANKS = "Hi Students . See you again";


     public function sayhello(){
          echo self::GREETING;
     }

     public function sayseeyou(){
          echo static::THANKS;
     }

}

class Child3 extends Myscoperesolutionoperator{

     public function __construct(){
          parent::__construct();

          // parent::saybye();
          echo "I am start working by automatically from Sub class <br/>";
     }
}


echo "This is Scope Resolution Operator <br/>";

$obj = new Myscoperesolutionoperator();
echo $obj->fullname . "<br/>";
echo $obj::GREETING . "<br/>";

$obj->sayhifi();
echo "<br/>";
$obj->saybye();

echo "<hr/>";
echo "<hr/>";


$ch1 = new Child1();
echo $ch1->fullname . "<br/>";
echo $ch1::GREETING . "<br/>";
echo Child1::GREETING . "<br/>";

echo "<hr/>";
echo "<hr/>";


$ch2 = new Child2();
echo $ch2->fullname . "<br/>";
echo $ch2::GREETING . "<br/>";
echo Child2::GREETING . "<br/>";

$ch2->sayhifi(); //Hello Students. Good evening from Srilanka    self::
echo "<br/>";
$ch2->saybye(); //Hi Students . See you again   static::

echo "<br/>";
$ch2->sayhello(); //Hello Students. Good evening from Srilanka    self::
echo "<br/>";
$ch2->sayseeyou(); //Hi Students . See you again   static::


echo "<hr/>";
echo "<hr/>";


$ch3 = new Child3();
echo $ch3->fullname . "<br/>";
echo $ch3::GREETING . "<br/>";
echo Child3::GREETING . "<br/>";

$ch3->sayhifi(); 
echo "<br/>";
$ch3->saybye(); 


echo "<hr/>";   

?>

