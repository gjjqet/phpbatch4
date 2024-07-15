<?php

class Scoperesolutionoperator{

  const GREETING = "Welcome to Thailand";
  const THANKS = "Thanks for visiting our country";

  public $fullname = "Su Myat";

  public function welcome(){
    echo $this->fullname . "<br/>";
    echo self::GREETING . "<br/>";
  }

  public function thanks(){
    echo static::THANKS . "<br/>";
  }

  public function __construct(){
    echo "I am start working automatically <br/>";
  }
  
}

class Child1 extends Scoperesolutionoperator{

}

class Child2 extends Scoperesolutionoperator{

  const GREETING = "Welcome to Myanmar";
  const THANKS  = "Thanks for your help";

  public function welcome2(){
    echo self::GREETING;
  }

  public function thanks2(){
    echo static::THANKS;
  }

}

class Child3 extends Scoperesolutionoperator{

  public function __construct(){
    parent::__construct();
    // echo static::GREETING;
    echo "I am overwriting constructor <br/>";
    // parent::__construct();
  }

}


echo "This is Scoperesolutionoperator <br/>";

$obj = new Scoperesolutionoperator();
$obj->welcome();
$obj->thanks();
// echo $obj::THANKS;
echo Scoperesolutionoperator::THANKS;

echo "<hr/>";
echo "<hr/>";

$ch1 = new Child1();
$ch1->welcome();
echo Child1::GREETING;
$ch1->thanks();

echo "<hr/>";
echo "<hr/>";

$ch2 = new Child2();
$ch2->welcome();
$ch2->thanks();
$ch2->welcome2();
$ch2->thanks2();

echo "<hr/>";
echo "<hr/>";

$ch3 = new Child3();

echo "<hr/>";
echo "<hr/>";

?>