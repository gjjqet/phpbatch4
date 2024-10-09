<?php


class Magicmethods{

  public $num;
  private $name;
  protected $age;

  public function __construct($val){

    //property_exists(classname,propertyname by string)

    // if(property_exists("Magicmethods","num")){
    //     echo $this->num = $val;
    // }else{
    //     echo "Property does not exist .";
    // }

    if(property_exists($this,"num")){
        echo $this->num = $val;
    }else{
        echo "Property does not exist .";
    }


  }
    
}


class Mymagicone{

    public $greeting = "hello";

    public function __get($var){
  
        echo "You not yet defined this \"${var}\" property . <br/>";
    }

    public function __set($var,$val){
        echo "You not yet defined this \"${var}\" property . so your vale \"${val}\" can not set <br/>";
    }

}


class Mymagictwo{

    public function sayhi(){
        echo "Helo i am sayhi non-static mehtod <br/>";
    }

    public static function saybye(){
        echo "Hello i am sayhi staitc method <br/>";
    }

    // for non-static method
    public function __call($method,$vals){
        // echo "You not yet defined this \"${vmethor}\" non-static method . so your parameter \"${vals}\" is can not set . <br/>"; 
        echo "You not yet defined this \"${vmethor}\" non-static method ." . "<pre>".print_r($vals,true)."</pre>"; 
    }

    // for static method
    public static function __callstatic($method,$vals){
        // echo "You not yet defined this \"${vmethor}\" non-static method . so your parameter \"${vals}\" is can not set . <br/>"; 
        echo "You not yet defined this \"${vmethor}\"static method ." . "<pre>".print_r($vals,true)."</pre>"; 
    }

}


class Mymagicthree{
    public function __invoke(){
        echo "Hello sir , i am working cuz you are trying to print out your class object as method. <br/>";
    }
}


class Mymagicfour{

    public function __toString(){
        echo "Hello sir , i am working cuz you are trying to print out your class object as method. <br/>";
    }

}
echo "<hr/>";


echo "This is Magic Methods <br/>";

$obj = new Magicmethods(100);

echo "<hr/>";

$obj1 = new Mymagicone();

echo $obj1->greeting;
echo "<br/>";
echo $obj1->hifi;

$obj1->byebye = "Good Bye";



echo "<hr/>";

$obj2 = new Mymagictwo();
$obj2->sayhi();
$obj2->saybye();

$obj2->sayhifi();
$obj2->sayhifi("greeting");
$obj2->sayhifi("greeting","bye bye");

$obj2::sayhaylo();
$obj2::sayhaylo("greeting");
$obj2::sayhaylo("greeting","bye bye");

echo "<hr/>";

$obj3 = new Mymagicthree();
$obj3();

echo "<hr/>";

// $obj4 = new Mymagicfour();
// echo $obj4;

// echo "I am apple ";

echo "<hr/>";

?>



<!-- 

__construct()
__destruct()
__get()
__set()
__call()
__callstatic()
__invoke()
_toString()

-->