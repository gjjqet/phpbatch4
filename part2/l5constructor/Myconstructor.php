<?php

// Class Object
class Myconstructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is ";

    //=> Magic Method 

    // public function __construct(){
    //     echo "I am start working by automatically!!. hee hee :P ";
    // }

    // public function __construct($name){
    //     echo "I am {$name},I am start working by automatically!!. hee hee :P ";
    // }

    // public function __construct($name,$old){
    //     echo "I am {$name} . {$old} years old.I am start working by automatically!!. hee hee :P ";
    // }

    public function __construct(){
        $result = $this->num1 + $this->num2 + $this->num3;

        // echo "$this->message = $result"; //Total result is = 600 
        echo "{$this->message} = {$result}"; //Total result is = 600
    }

}

echo "This is Constructor <br/>";
// $obj = new Myconstructor();
// $obj = new Myconstructor("Aung Aung");
// $obj = new Myconstructor("Aung Aung",25);

$obj = new Myconstructor();

echo "<hr/>";

?>