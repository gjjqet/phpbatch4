<?php

ini_set("display_errors",1);



echo "This is Lambda Function (also know as anonymous functions or closures)<br/>";

function mycalculate($num1,$num2,$funone){
    $total = $num1+$num2;
    $funone($total);
}

$myfunone = function($result){
    echo "Total Result is = $result <br/>";
};

mycalculate(100,200,$myfunone);




function showresult($result){
    echo "Sum result is = {$result}";
}

$calfun = function($x,$y){
    return $x+$y;
};

showresult($calfun(100,500));



// => Lambda style with array_filter(array,callback)

$numbers = [10,50,13,17,19,24,80,11,20,16];

$filtereven = function($num){
    return $num % 2 === 0;
};


$getevens = array_filter($numbers,$filtereven);


echo "<pre>".print_r($getevens,true)."</pre>";

sort($getevens);

echo "<pre>".print_r($getevens,true)."</pre>";

echo "<hr/>";



// => Lambda style with array_walk(array,callback,parameter)

$colors = array("a"=>"red","b"=>"green","c"=>"blue",'d'=>"white","e"=>"black");

?>