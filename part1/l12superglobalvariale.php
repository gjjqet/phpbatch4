<?php

//=>Super Global Variable
// 1.$GLOBALS
// 2.$_SERVER
// 3.$_REQUEST
// 4.$_POST
// 5.$_GET
// 6.$_FILES
// 7.$_ENV
// 8.$_COOKIE
// 9.$_SESSION



// 1. $GLOBALS[]

$x=100;
$y=200;

//error
// function sumresult(){
//     $total=$x+$y;
//     return $total
// };

// echo sumresult();
// echo $total;

function sumresult(){
    $GLOBALS["total"]=$GLOBALS["x"]+$GLOBALS["y"];
    return $GLOBALS['total'];
};

echo sumresult();//300
echo $GLOBALS["total"];//300
echo $total;//300


//=>2. $_SEVER

echo $_SERVER["PHP_SELF"]; // file name
echo $_SERVER["HTTP_USER_AGENT"]; // browser information
echo $_SERVER["HTTP_HOST"];//
echo $_SERVER["SEVER_NAME"];//
echo $_SERVER["SEVER_SOFTWARE"];//
echo $_SERVER["SEVER_PORT"];//
echo $_SERVER["SEVER_PROTOCOL"];//
echo $_SERVER["SEVER_SIGNATURE"];//
echo $_SERVER["REQUEST_METHOD"];//
echo $_SERVER["REMOTE_ADDR"];//
echo $_SERVER["SCRIPT_FILENAME"];//
echo $_SERVER["SCRIPT_NAME"];//
echo $_SERVER["QUERY_STRING"];//


?>