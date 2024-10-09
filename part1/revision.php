<?php

date_default_timezone_set("Asia/Yangon");

ini_set("display_errors",1);

$getdate = getdate();

echo "<pre>".print_r($getdate,true)."</pre>";

// echo $getdate["seconds"];

$date = date_create();
$format = date_format($date,"y-M-d");
echo $format;

echo "<br/>";


$date2 = date_create("2024-9-25");
$format2 = date_format($date2,"Y/m/d ");

echo $format2;




?>