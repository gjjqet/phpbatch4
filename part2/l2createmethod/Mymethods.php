<?php

//Class Object 
class Mymethods{

    // =>Access Modifier 
        // public = anyone can access
        // private = only access inside main calass
        // protected = subclass / Extened Class

    
    //Class Method / Methos
    public function greeting(){
        echo "Have a good day";
    }

    public function calculate($num){
        echo "Getting calculate number is = {$num} <br/>";
    }

    public function result($num=1){
        echo "Getting result number is = {$num} <br/>";
    }
    
}

$obj = new Mymethods();

echo "This is Class Method <br/>";

$obj->greeting();
echo "<br/>";

//$obj->calculate();  // * no action

$obj->calculate(150);       // Getting calculate number is = 150
$obj->calculate(300,500);   // Getting calculate number is = 300

$obj->result();             // Getting result number is = 1
$obj->result(100);          // Getting result number is = 100

?>


