<?php

ini_set("display_errors",1);

echo "This is call_user_func_array(). <br/>";

function funone($num1,$num2){
    echo __FUNCTION__ , "value are $num1 and $num2 <br/>";
}

funone(10,20);

// call_user_func_array(callback,array)
call_user_func_array("funone",[10,20]);
call_user_func_array("funone",array(10,20));


class Hifi{
    function funtwo($num1,$num2){
        echo __METHOD__ , "value are $num1 and $num2 <br/>";
    }
}

$obj = new Hifi();
$obj->funtwo(300,400);

// call_user_func_array(["class","mthod"],array)
call_user_func_array([$obj,"funtwo"],[300,400]); // Hifi::funtwovalue are 300 and 400
call_user_func_array([$obj,"funtwo"],array(300,400));// Hifi::funtwovalue are 300 and 400

echo '<hr/>';

?>