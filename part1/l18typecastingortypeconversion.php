<?php

//=> Data type
//string
//int
//float
//bool
//array
//object
//unset


//=>Cast to String

$val1 = "hello";//String
var_dump($val1);
$result = (string) $val1;
var_dump($result);


$val2 = 10 ; //Integer
var_dump($val2);
$result = (string) $val2;
var_dump($result);


$val3 = 35.45 ; //Float
var_dump($val3);
$result = (string) $val3;
var_dump($result);


$val4 = true; //Boolean
var_dump($val4);
$result = (string) $val4;
var_dump($result);//true = "1"  false = ""


$val5 = NULL ; //null
var_dump($val5);
$result = (string) $val5;
var_dump($result);//string(0) ""



//=>Cast to Integer

$val1 = "hello";//String
var_dump($val1);
$result = (int) $val1;
var_dump($result);


$val2 = 10 ; //Integer
var_dump($val2);
$result = (int) $val2;
var_dump($result);


$val3 = 35.67 ; //Float
var_dump($val3);
$result = (int) $val3;
var_dump($result); //int(35)


$val4 = true; //Boolean
var_dump($val4);
$result = (int) $val4;
var_dump($result);//true = 1  false = 0


$val5 = NULL ; //null
var_dump($val5);
$result = (int) $val5;
var_dump($result);//0



//=>Cast to Float

$val1 = "hello";//String
var_dump($val1);
$result = (float) $val1;
var_dump($result);


$val2 = 10 ; //Integer
var_dump($val2);
$result = (float) $val2;
var_dump($result);//float(10)


$val3 = 35.67 ; //Float
var_dump($val3);
$result = (float) $val3;
var_dump($result); //int(35.57)


$val4 = true; //Boolean
var_dump($val4);
$result = (float) $val4;
var_dump($result);//true = 1  false = 0


$val5 = NULL ; //null
var_dump($val5);
$result = (float) $val5;
var_dump($result);//0




//=>Cast to Boolean

$val1 = "hello";//String
var_dump($val1);
$result = (bool) $val1;
var_dump($result);


$val2 = 10 ; //Integer
var_dump($val2);
$result = (bool) $val2;
var_dump($result);//boolen(true)


$val3 = 35.67 ; //Float
var_dump($val3);
$result = (bool) $val3;
var_dump($result); //bool(true)


$val4 = true; //Boolean
var_dump($val4);
$result = (bool) $val4;
var_dump($result);//bool(true)


$val5 = NULL ; //null
var_dump($val5);
$result = (bool) $val5;
var_dump($result);//bool(false)



//=>Cast to Object

$val1 = "hello";//String
var_dump($val1);
$result = (object) $val1;
var_dump($result);//string(5) "hello"object(stdClass)#1 (1) {["scalar"]=>string(5) "hello"}


$val2 = 10 ; //Integer
var_dump($val2);
$result = (object) $val2;
var_dump($result);


$val3 = 35.67 ; //Float
var_dump($val3);
$result = (object) $val3;
var_dump($result); 


$val4 = true; //Boolean
var_dump($val4);
$result = (object) $val4;
var_dump($result);


$val5 = NULL ; //null
var_dump($val5);
$result = (object) $val5;
var_dump($result);



$val4 = true; //Boolean
var_dump($val4);
$result = (object) $val4;
var_dump($result);



//=>Cast to Unset

$val1 = "hello";//String
var_dump($val1);
$result = (unset) $val1;
var_dump($result);//null


$val2 = 10 ; //Integer
var_dump($val2);
$result = (unset) $val2;
var_dump($result);


$val3 = 35.67 ; //Float
var_dump($val3);
$result = (unset) $val3;
var_dump($result); 


$val4 = true; //Boolean
var_dump($val4);
$result = (unset) $val4;
var_dump($result);


$val5 = NULL ; //null
var_dump($val5);
$result = (unset) $val5;
var_dump($result);



$val4 = true; //Boolean
var_dump($val4);
$result = (unset) $val4;
var_dump($result);




?>