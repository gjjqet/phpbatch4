<?php

//Variable Scope
  //(i)Global Variable Scope
  //(ii)Local Variable Scope
  //(iii)Static Variable Scope


  $num1=100; //Global Variable Scope

  function funone(){
    echo "Gloval Variable Scope print in function = $num1";
  };

  funone(); //Gloval Variable Scope print in function = (no print out $num1 , cuz function will generate an error)

  echo "Gloval Variable Scope print outsite = $num1"; //Gloval Variable Scope print outsite = 100




  function funtwo(){
    $num2=200; // Local Variable
    echo "Gloval Variable Scope print in function = $num2"; 

  };

  funtwo();//Gloval Variable Scope print in function = 200

  echo "Gloval Variable Scope print outsite = $num2"; //Gloval Variable Scope print outsite = (no print out $num2 , cuz function will generate an error)




//=>global keyword

$num3=300;
$num4=400;

function funthree(){
    //global $num3;
    //global $num4;

    global $num3,$num4;
    global $result;

    $result=$num3+$num4;
    echo "This is result , print by funthreee = $result";
};

funthree();

echo "Local Variable print outside = $result";//Local Variable print outside = 700;





//=>Supre Global Variable

$num5=500;
$num6=600;

function funfour(){

    $GLOBALS["sum"]=$GLOBALS["num5"]+$GLOBALS["num6"];
    // echo "This is sum , print by funfour = $sum"; //undefined  variable : sum


};

funfour();

echo "Local Variable print outside = $sum";//Local Variable print outside = 1100




//Static Keyword

$num7=700;
function funfive(){
   global $num7;

   $num7++;
   echo $num7;
};

funfive(); //701
funfive(); //702
funfive(); //703
funfive(); //704


function funsix(){
    $num8=800;

    $num8++;
    echo $num8;
};

funsix() //801
funsix()//801
funsix()//801
funsix()//801


function funseven(){
   static $num9=900;

    $num9=9++;
    echo $num9
};

funseven() //901
funseven()//902
funseven()//903
funseven()//904





//=>passing by reference (pr &)

$num10 = 100;

function funeight($num10){
    $num10=10000;
    echo $num10;
};

echo $num10;//100
funeight($num10);//10000
echo $num10;//100



$num11=110;
function funnine(&$num11){
   $num11=11000;
   echo $num11;
};

echo $num11;//110
funnine($num11);//11000
echo $num11;//11000
echo $num11;//11000




$name="aung aung";
$fullname="aung aung oo";

function funten(&$val){
    $val="su su";
    echo $val;
};

echo $name;//aung aung
funten($name);//su su
echo $name;//su su
echo $name;//su su
echo $fullname;//aung aung oo



?>

<!-- 
  global keyword
  static keyword
  &
 -->