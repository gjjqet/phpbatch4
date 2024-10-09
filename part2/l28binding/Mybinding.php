<?php

// => Data Binding
        // (i) Static Binding (or) Early Binding
        // (ii)Dynamic Binding (or) Late binding (or) late static binding


class hola1{

    public $name = "Ko Ko";

    public function friend(){
        return "My best friend name is ".$this->name . "<br/>";
    }

    public function getfriend(){
        echo $this->friend();
    }
   
}

class hola2 extends hola1{

    public function friend(){
        return "My best friend name is ".$this->name . " and Su Su . <br/>";
    }

}

echo "This is Binding <br/>";



echo "<hr/>";

?>