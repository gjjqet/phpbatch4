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

echo $_SERVER["PHP_SELF"];         //    /phpbatch4/part1/l12superglobalvariables.php
echo $_SERVER["SCRIPT_NAME"];  //  /     phpbatch4/part1/l12superglobalbariable.php
echo $_SERVER["HTTP_USER_AGENT"];  //    Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:127.0) Gecko/20100101 Firefox/127.0
echo $_SERVER["HTTP_HOST"];        //    localhost
echo $_SERVER["SEVER_NAME"];       //    localhost(Return the name of host server = eg:www.yourdomain.com)
echo $_SERVER["SEVER_SOFTWARE"];  //     Apache/2.4.55(Ubuntu)
echo $_SERVER["SEVER_PORT"];      //     80
echo $_SERVER["SEVER_PROTOCOL"];  //     HTTP/1.1
echo $_SERVER["SEVER_SIGNATURE"]; //     Apache/2.4.55 (Ubuntu) Server at localhost Port 80
echo $_SERVER["REQUEST_METHOD"]; //      Get
echo $_SERVER["REMOTE_ADDR"];    //      ::1
echo $_SERVER["SCRIPT_FILENAME"];//      /var/www/html/phpbatch4/part1/l12superglobalveriable.php

//http://localhost/phpbatch4/part1/superglobalvariables.php?aungaung
echo $_SERVER["QUERY_STRING"];   //****aungaung
echo "<hr/>";




?>