<?php

// Class Object
class Mydestructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is ";

    //megic methos
    public function __construct(){
        $result = $this->num1 + $this->num2 +$this->num3;
        echo "$this->message = $result <br/>";
    }

    //member method
   public function car($brand){
        echo "I bought a new {$brand} car . <br/>";
   }

   //megic method
   //Note :: Destructor can not set parameter
   public function __destruct(){
        echo "I am working by automatically after all above , hee hee :P ";
   }
  
}

echo "This is Destructor <br/>";
// $obj = new Myconstructor();
// $obj = new Myconstructor("Aung Aung");
// $obj = new Myconstructor("Aung Aung",25);

$obj = new Mydestructor();

$obj->car("Toyota");

echo "<hr/>";

?>