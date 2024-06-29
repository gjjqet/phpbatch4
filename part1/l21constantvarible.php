<?php

//=>Constant Variable


define('variablename','value');
//string/int/boolean/float oki
//variablename should be uppercase
//redefine are deny

define("FULLNAME","Honey Nway Oo");
echo FULLNAME;//Honey Nway Oo

define("FULLNAME",'Ma Ma Mya');
echo FULLANME;//Honey Nway Oo

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","123456789");
define("DB_NAME","phpdbone");

echo DB_HOST;
echo "<br/>";
echo DB_USER;
echo "<br/>";
echo DB_PASS;
echo "<br/>";
echO DB_NAME;
echo "<br/>";


//=> constant("variablename") Function

echo constant("DB_HOST");
echo "<br/>";
echo constant("DB_USER");
echo "<br/>";
echo constant("DB_PASS");
echo "<br/>";
echO constant("DB_NAME");
echo "<br/>";


//=> constant : const keyword
//string/int/boolean/float oki
//variablename should be uppercase
//redefine are deny

const MESSAGE = "Hello sir , are you ready to learn PHP OOp concept ?";
echo MESSAGE;
echo constant("MESSAGE");


const MESSAGE = "Hello sir , are you ready to learn Javascript ES6 concept ?";
echo MESSAGE; //Hello sir , are you ready to learn PHP OOp concep
echo constant("MESSAGE");//Hello sir , are you ready to learn PHP OOp concep



?>