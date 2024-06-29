<?php

// json_encode(array);

// json_decode(array);
// json_decode(array,true);


$colors  = ["red","green","blue"];
echo $colors;//error
var_dump($colors);

$mycolors = json_encode($colors);
echo $mycolors;//["red","green","blue"]
var_dump($mycolors);


$students = ["name"=>"aung aung","age"=>25,"city"=>"Yangon"];
var_dump($students);
echo $students["name"];
echo $students["age"];
echo $students["city"];

$studentinfos = json_encode($students);
echo $studentinfos;//{"name":"aung aung","age":25,"city":"Yangon"}
var_dump($studentinfos);//string(45) "{"name":"aung aung","age":25,"city":"Yangon"}"

// can't print

// echo $studentinfos["name"];
// echo $studentinfos["age"];
// echo $studentinfos["city"];



//=> Decode by single parameter

$studentdatas = '{"name":"aung aung","age":25,"city":"Yangon"}';
$studentdecode = json_decode($studentdatas);
var_dump($studentdecode);//

// can't print

// echo $studentdecode["name"];
// echo $studentdecode["age"];
// echo $studentdecode["city"];


//can print (object(stdClass)( -> object operator ) )
echo $studentdecode->name;
echo $studentdecode->age;
echo $studentdecode->city;


foreach($studentdecode as $key=>$value){
    echo $key . "is" .$value . "<br/>";
};


//=>Decode by multi parameter

$staffdatas = '{"name":"aung aung","age":25,"city":"Yangon"}';
$staffdecode = json_decode($staffdatas,true);//array(3) {["name"]=>  string(9) "aung aung"["age"]=>int(25)["city"]=>string(6) "Yangon"}
  
var_dump($staffdecode);//

//can print

//echo $staffdecode["name"];
// echo $staffdecode["age"];
// echo $staffdecode["city"];


//can't print
// echo $staffdecode->name;
// echo $staffdecode->age;
// echo $staffdecode->city;


?>