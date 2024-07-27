<?php

//Properties and Methods Visibility 

// Visibility                          Availablity
// public                              Anywhere : inside other classes and object instances
// protected                           Inside the current class and sub classes
// private                             Inside the current class only

class Classconstat{
   
    const NAME = "Honey Nway Oo";
    public const CITY = "Yangon";
    protected const EMAIL = "honeynwayoo@gmail.com";
    private const PASSWORD = "123456789";

    public function getaccess(){
        echo "Email is = ".self::EMAIL . " & Password is = ". self::PASSWORD . "<br/>";
    }

}

class Kid1 extends Classconstant{

}

class Kid2 extends Classconstant{

    public function getcontent(){
        echo "Name is ".self::NAME . "& She live in ".self::CITY."<br/>";
    }

    public function getemail(){
        echo "Email is ".self::EMAIL."<br/>";
    }

    public function getpassword(){
        echo "Email is ".self::PASSWORD."<br/>";
    }


}

echo "This is Class Constant . <br/>";

$obj = new Classconstant(); 
echo $obj::NAME . "<br/>";  //Honey Nway Oo
echo Classconstant::CITY . "<br/>";  //Yangon

// echo $obj::EMAIL . "<br/>"; 
// echo Classconstant::PASSWORD . "<br/>";


$obj->getinfo();  //Name is = Honey Nway Oo & She live in Yangon
$obj->getaccess(); //Email is = honeynwayoo@gmail.com & Password is = 123456789

echo "<hr/>";

$kk1 = new Kid1();
echo $kk1::NAME;
echo Kid1::CITY;

// echo $kk1::EMAIL . "<br/>"; 
// echo Kit1::PASSWORD . "<br/>";


$kk1->getinfo();  //Name is = Honey Nway Oo & She live in Yangon
$kk1->getaccess(); //Email is = honeynwayoo@gmail.com & Password is = 123456789


echo "<hr/>";

$kk2 = new Kid2();
echo $kk2::NAME . "<br/>";
echo Kid2::CITY . "<br/>";

// echo $kk2::EMAIL . "<br/>"; 
// echo Kit2::PASSWORD . "<br/>";


$kk2->getinfo();  //Name is = Honey Nway Oo & She live in Yangon
$kk2->getaccess(); //Email is = honeynwayoo@gmail.com & Password is = 123456789

$kk2->getemail();
// $kk2->getpassword(); //error

echo "<hr/>"



?>