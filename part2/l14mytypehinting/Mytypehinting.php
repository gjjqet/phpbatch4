<?php

// Note:: Type hinting is concept htat provideds hints to function or methodd for the expected data type of arguments

// Advantages of type hinting 
    // helps users debug the code easily or the code provides error very specifically.
    // a great concept for static kind of data

// Disdavantages of type hinting
    // function or method only take one type of data
    // the dynamic data or argument are not there


declare(strict_types=1);
ini_set("display_errors",1);

class Mytypehinting{

   public function getdata($val){
        echo $val . "<br/>";
   }
   
}


echo "This is typehinting <br/>";

$obj1 = new Mytypehinting();
$obj1->getdata("aung aung"); // aung aung
$obj1->getdata("10"); // 10
$obj1->getdata(100); // 100
$obj1->getdata(25.68); // 25.68
$obj1->getdata(true); // 1
$obj1->getdata(["red","green","blue"]); // array


echo "<hr/>";

class Typehinting2{

    public function getdata(string $val){
         echo $val . "<br/>";
    }
    
 }
 
  
 $obj2 = new Typehinting2();
 $obj2->getdata("aung aung"); // aung aung
 $obj2->getdata("10"); // 10
//  $obj2->getdata(100); // 100
//  $obj2->getdata(25.68); // 25.68
//  $obj2->getdata(true); // 1
//  $obj2->getdata(["red","green","blue"]); // array

echo "<hr/>";


class Typehinting3{

    public function getdata(int $val){
         echo $val . "<br/>";
    }
    
 }
 

 
$obj3 = new Typehinting3();
//  $obj3->getdata("aung aung"); // aung aung
//  $obj3->getdata("10"); // 10
 $obj3->getdata(100); // 100
//  $obj3->getdata(25.68); // 25.68
//  $obj3->getdata(true); // 1
//  $obj3->getdata(["red","green","blue"]); // array

echo "<hr/>";



class Typehinting4{

    public function getdata(bool $val){
         echo $val . "<br/>";
    }
    
 }
 

$obj4 = new Typehinting4();
//  $obj4->getdata("aung aung"); // aung aung
//  $obj4->getdata("10"); // 10
//  $obj4->getdata(100); // 100
//  $obj4->getdata(25.68); // 25.68
 $obj4->getdata(true); // 1
//  $obj4->getdata(["red","green","blue"]); // array

echo "<hr/>";


class Typehinting5{

    public function getdata(float $val){
         echo $val . "<br/>";
    }
    
}
 

$obj5 = new Typehinting5();
//  $obj5->getdata("aung aung"); // aung aung
//  $obj5->getdata("10"); // 10
 $obj5->getdata(100); // 100
 $obj5->getdata(25.68); // 25.68
//  $obj5->getdata(true); // 1
//  $obj5->getdata(["red","green","blue"]); // array

echo "<hr/>";


class Typehinting6{

    public function getdata(array $val){
         echo $val . "<br/>";
    }
    
}
 

$obj6 = new Typehinting6();
//  $obj6->getdata("aung aung"); // aung aung
//  $obj6->getdata("10"); // 10
//  $obj6->getdata(100); // 100
//  $obj6->getdata(25.68); // 25.68
//  $obj6->getdata(true); // 1
 $obj6->getdata(["red","green","blue"]); // array

echo "<hr/>";


class Typehinting7{

    public function total(array $arrs){
        $result = 0;

        foreach($arrs as $arr){
            // $result += $arr;

            $result = $result + $arr;
        }

        echo $result;

    }
    
 }
 

$obj7 = new Typehinting7();
$obj7->total([10,20,30,40,50]); // 150

echo "<hr/>";



class Phone{

    protected $brand;
    protected $hasfacesensor;
    protected $numberofsim;
    protected $price;

    public function setbrand(string $value){
        $this->brand = $value;
    }

    public function hasfacesensor(bool $value){
        $this->hasfacesensor = $value;
    }

    public function setnumberofsim(int $value){
        $this->numberofsim = $value;
    }

    public function setprice(float $value){
        $this->price = $value;
    }

    public function getinfo(){
        echo "Brand name is = $this->brand <br/> Face Sensor = $this->hasfacesensor <br/> Number of SIM = $this->numberofsim <br/> Price is $this->price";
    }

}

$objphone = new Phone();
$objphone->setbrand("iPhone");
$objphone->hasfacesensor(true);
$objphone->setnumberofsim(2);
$objphone->setprice(999.68);

$objphone->getinfo();


echo "<hr/>";

?>