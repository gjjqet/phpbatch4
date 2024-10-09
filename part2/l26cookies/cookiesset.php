<?php

//=> Syntax (Note:: gone after browser end)
//   setcookies(cookiename,value)

// setcookie("mmk","Myanmar Kyat");
// echo "Cookie Set Successfully";


//=> Syntax (Note:: gone after browser end)
//   setcookies(cookiename,value,expire)

// setcookie("mmk","Myanmar Kyat",time()+60*60*24*3); // 3 days
setcookie("mmk","Myanmar Kyat",time()+(86400*5)); // 5 days
echo "Cookie Set Successfully";


// setcookie("england","dollors",time()+60*2);



?>