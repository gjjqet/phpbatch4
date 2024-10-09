<?php

ini_set("display_errors",1);

echo "This is Lambda Function (also know as anonymous functions or closures). <br/>";

$num1 = 300; // Global Variable
$num2 = 400;

function myfunone(){
    global $num1,$num2;
    echo "This is regular function. my getting value is = ".$num1+$num2."<br/>";
};

myfunone();


$myfuntwo = function() use($num1,$num2){
    echo "This is regular function. my getting value is = ".$num1+$num2."<br/>";
};

$myfuntwo();


function myfuncall($colsurefun){
    $colsurefun();
};

myfuncall(function() use($num1,$num2){
    echo "This is regular function. my getting value is = ".$num1+$num2."<br/>";
});



//=> Closure Function with array_walk(array,callback)

$numbers = [1,2,3,4,5,6,7,8,9,10];

$totalresult = 0;

$calculatefun = function($num) use(&$totalresult){
    $totalresult += $num;
};

array_walk($numbers,$calculatefun);

echo "Total sum result is = ".$totalresult . "<br/>";





// => Lambda style with array_walk(array,callback,parameter)

$colors = array("a"=>"red","b"=>"green","c"=>"blue",'d'=>"white","e"=>"black");
$idx = 0;

array_walk($colors,function($val,$key,$per) use(&$idx){
    $idx++;
    echo "Index is $idx , Key is $key and Value is $val $per <br/>";
},"color");


echo '<hr/>';

?>