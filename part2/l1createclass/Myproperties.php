<?php

// echo "hay";

//=> Define Class Object (OOP = Object-Oriented Programming)

//class Classname{
//   properties
//   methods
//}

// new Classname();

//Class Object 
class Myproperties{

    //properties
    var $firstname = "Data Land";
    var $lastname = "Technology";

}

$obj = new Myproperties();

echo "This is Class Object <br/>";
echo $obj->firstname." ".$obj->lastname;


?>