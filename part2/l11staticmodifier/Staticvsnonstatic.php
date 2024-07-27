<?php

class Staticvsnonstatic{

    //Member variables 

    //Non-static property
    public $fullname = "Honey Nway Oo";

    //Static property 
    public static $city = "Yangon";

    //Constant 
    const GENDER = "Female";

    //Member Methods 
    //Non-static method can calls Static property and Non-static property
    //Non-static method can call Static method and Non-static method 


    //Static method can not call Non-static property bit constant can call
    //Static method can not call Non-static method


    //Non-static Methods

    public function getname(){
        echo "I am Non-static method <br/>";

        echo "Name is $this->fullname <br/> ";
    }

    public function getcity(){
        echo "I am Non-static method <br/>";

        echo "City is" . self::$city ."<br/> ";
    }

    public function getgender(){
        echo "I am Non-static method <br/>";

        echo "City is" . self::GENDER ."<br/> ";
    }



    //Static Methos

    public static function getstaticcity(){
        echo "I am Static method <br/>";

        echo "City is" . self::$city . " & home town is ". static::$city ."<br/>  ";
    }

    public static function getstaticgender(){
        echo "I am Static method <br/>";

        echo "Gender is" . self::GENDER ."<br/> ";
    }






    public function car(){
        echo "I am Non-static method <br/>";

        $brand = self::carbrand();
        echo "I bought a new $brand car <br/>";
    }

    public static function carbrand(){
        return "Toyota LEXUS LX570";
    }

    public function mobilebrand(){
        return "iPhone 16 Pro Max <br/>";
    }
    
    public function beforbuy(){
        echo "I am Non-static method <br/>";

        $brand = $this->mobilebrand();
        echo "I amthinkig about to by a new ${brand} <br/>";
    }

} 




echo "This is Staticvsnonstatic <br/>";

$obj = new Staticvsnonstatic();
echo $obj->fullname;//Honey Nway Oo
echo "<br/>";

echo $obj::$city; // Yangon
echo "<br/>";
echo Staticvsnonstatic::$city; // Yangon

echo $obj::GENDER; // Female
echo "<br/>";
echo Staticvsnonstatic::GENDER; // Female
echo "<br/>";


//Static Method

$obj->getstaticcity(); // City isYangon & home town is Yangon
$obj->getstaticgender(); // Gender is Female

Staticvsnonstatic::getstaticcity(); // City isYangon & home town is Yangon
Staticvsnonstatic::getstaticgender(); // Gender is Female

echo "<hr/>";

$obj->car();

$obj->beforbuy(); //I amthinkig about to by a new iPhone 16 Pro Max


echo "<hr/>";

?>