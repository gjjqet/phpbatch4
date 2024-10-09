<?php

ini_set("display_errors",1);

// (...) Spread Operator (used in javascript)
// (...) Splat Operator (used in php,python)

// Splat Operator(...)

echo 'This is Variadic Function. <br/>';

function getval($val1,$val2,$val3){
    echo "Val1 result is {$val1} <br/>";
    echo "Val2 result is {$val2} <br/>";
    echo "Val3 result is {$val3} <br/>";
}

getval("su su","nu nu","yu yu");
// getval("red","green","blue");
// getval(["red","green","blue"]); // error
getval(...["red","green","blue"]);


function sumresult($num1,$num2,$num3){
    return $num1+$num2+$num3;
}

echo(sumresult(1,2,3)); // 6
echo "<br/>";

// echo sumresult([1,2,3]); //error
echo sumresult(...[1,2,3]);//6
echo "<br/>";
echo sumresult(...[1,2,3,4]); //6 

echo "<hr/>";



// => func_get_args()

function totalresult(){
    $arrs = func_get_args();
    // echo $arrs; // Array 
    // echo "<pre>".print_r($arrs,true)."</pre>";
    // echo count($arrs); // 3

    $total = 0;

    // for($x = 0; $x < count($arrs) ; $x++){
    //     $total += $arrs[$x];
    // }

    // foreach($arrs as $arr){
    //     $total += $arr;
    // }

    // return $total;

    return array_sum($arrs);

}

// totalresult(10,20,30);

echo totalresult(10,20,30); // 60

echo '<br/>';



// => Splat Operator in Array 

$phones = ["apple","oppo","vivo","samsung"];
$cars = ["toyota","suzuki","mazda"];
$computers = ["mac",'aoc',"acer"];

$myowns = [$phones,$cars,$computers];
echo "<pre>".print_r($myowns,true)."</pre>"; // multi dimational array


$yourowns = [...$phones,...$cars,...$computers];
echo "<pre>".print_r($yourowns,true)."</pre>"; // manual dimational array

echo "<hr/>";


function funone($val){
    return $val;
}

echo funone("mango");//mango
echo funone("mango","orange","apple"); // mango


function funtwo(...$val){
    return $val;
}

// echo funtwo("mango"); // Array 
echo "<pre>".print_r(funtwo("mango"),true)."</pre>";
echo "<pre>".print_r(funtwo("mango","orange","apple"),true)."</pre>";
echo "<pre>".print_r(funtwo(100,200,300),true)."</pre>";
echo "<pre>".print_r(funtwo(["red","blue","green"]),true)."</pre>";
echo "<pre>".print_r(funtwo(["red","blue","green"],["fish","cat","dog"]),true)."</pre>";
echo "<pre>".print_r(funtwo("mango","orange","apple",["red","blue","green"]),true)."</pre>";

echo "<hr/>";


function myfunthree(...$val){
    echo $val[1]. '<br/>';
}

myfunthree("su su","nu nu","yu yu"); // nu nu
myfunthree(["su su","nu nu","yu yu"],"red","green","blue"); // red

function myfunfour(...$val):string{
    return $val[2] . $val[0][2] . $val[1]."<br/>";
}

echo(myfunfour(["su su","nu nu","yu yu"],' is my elder sister',"Ms."));



function myfunfive(string $name,int ...$age):string{
    return "{$name} is {$age[0]} years old <br/>";
}

echo myfunfive("su su",25);




function myfunsix(int ...$numbers):int{
    return array_sum($numbers);
}

echo myfunsix(1,2,3); // 6

echo "<br/>";

function sayhi($greeting,...$names){
    foreach($names as $name){
        echo "{$greeting} , {$name}! <br/>";
    }
}

sayhi("Hello","su su","nu nu","yu yu");

echo '<hr/>';


// function sayhello(...$names,$greeting){
//     foreach($names as $name){
//         echo "{$greeting} , {$name}! <br/>";
//     }
// }

// sayhello("Hello","su su","nu nu","yu yu");


echo "<hr/>";



?>