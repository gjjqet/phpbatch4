<?php

$num1=100;
$num2=200;

function apple(){
   $sum=$GLOBALS["num1"]+$GLOBALS["num2"];
   echo $sum;
};


$num2=200;

function funtwo(){
    global $num2;
    $num2 ++;
    echo $num2;
};

funtwo();
funtwo();
funtwo();
funtwo();


function funthree(){
    $num3=300;
    $num3++;
    echo $num3;

};

funthree();
funthree();
funthree();
funthree();

$num4=400;
function funfour($apple){
      $apple=900;
      echo $apple;
};

echo $num4;
funfour($num4);


//Super Global Variable
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION


?>