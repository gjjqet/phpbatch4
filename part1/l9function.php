<?php

//User Defined Function

//function name(){
//  code to be executed
//}


//------------------------------------------------

//Parameter Function (or) Argument Function
//(i)Single
//(ii)Multi

//function name($arg1){
 //   code to be executed
//}


// function name($arg1,$arg2){
//     code to be executed
// }

//----------------------------------------------------

//Default parameter function (or ) Default argument function

// function name($name="aung aung",$age=20){
//   code to executed
// }

//---------------------------------------------------------

function myfun(){
    echo "my name is mr.tin";
};

myfun();
myfun();

function myfun2(){
    $num1=10;
    $num2=20;
    $cal=$num1+$num2;
    echo $cal;
};

myfun2();//30

//----------------------------------------------------------------------------

function singlefun($name){
  echo "My name is $name";
};

singlefun("aung aung");


//----------------------------------

function multifun($name,$age){
    echo "My name name $name My age is {$age}";
};

//multifun(); //error

//------------------------------------------------

function defaultfun($name="hla hla"){
    echo "My name is ${name}";
};

defaultfun();//My name is hla hla
defaultfun("aye aye");//My name is aye aye

function defaultfun1($num1=10,$num2=20,$num3=30){
    $cal=$num1+$num2+$num3;
    echo $cal;
};

defaultfun1();//60
defaultfun1(50,10);//90
defaultfun1(70,15,5);//90

//---------------------------------------------------

//Return

function myreturn($num1){
    $cal=$num1+10;
    return $cal;   
};

echo myreturn(50);//60

function returnfun1($num1){
    return $cal=$num1+10;
};

echo returnfun1(100);//110



function returnfun2($num1,$num2,$num3){
    $cal=$num1+$num2+$num3;
    return $cal;
};

echo returnfun2(10,20,30);//60



function returnfun3($num1=10,$num2=20,$num3=30){
    $cal=$num1+$num2+$num3;
    return $cal;
};

echo returnfun3(50);//100
echo returnfun3();//60




// => Dynamite Function Call

$dyn1=myreturn(100);
echo $dyn1;

$dyn2=returnfun3();
echo $dyn2;

$dyn3="returnfun1";//Dynamite function call
echo $dyn3;//returnfun1
echo $dyn3(200);//210

$myfun="returnfun3";
echo $myfun;
echo $myfun();

if(function_exists($myfun)){
   echo "Yes , your variable value is already in some kind of function.";
}else{
    echo "No";
};


//----------------------------------------------------------------


?>

