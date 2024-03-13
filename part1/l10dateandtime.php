<?php

// 1 Jan 1970  UTC

date_default_timezone_set("Asia/Yangon")


$getdate=getdate();
//echo $getdate();//error
var_dump($getdate);
echo "<pre>".print_r($getdate,true)."</pre>";

echo "This is seconds = ".$getdate["seconds"];
echo "This is minutes = ".$getdate["minutes"];
echo "This is hours = ".$getdate["hours"];

echo "This is wday = ".$getdate["wday"];//week days(0 to 6) , sun=0 mon=1
echo "This is weekday= ".$getdate["weekday"];//sun to sat
echo "This is yday = ".$getdate["yday"];//64 day of the year

echo "This is month = ".$getdate["month"];//March
echo "This is mon = ".$getdate["mon"];//3 //day of month
echo "This is mday = ".$getdate["mday"];//5 //today

echo "This is year = ".$getdate["year"];//2024

echo "This is 0 = ".$getdate["0"];//

$time=time();
echo "This is 0 = ".$time;


//DATE/TIME Format
//date(format,timestampe)

$date=date("a",$time);
echo "This is format a =". $date;//pm , am

$date=date("A",$time);
echo "This is format A =" $date;//PM , AM

$date=date("d",$time);
echo "This is format d = ".$date;//05 //date leading 0

$date=date("D",$time);
echo "This is format D = ".$date;//Tue //day

$date=date("F",$time);
echo "This is format F = ".$date;//March //month

$date=date("g",$time);
echo "This is format g = ".$date;// 10 // hours no leading zero 12hr

$date=date("G",$time);
echo "This is format G = ".$date;//22 // hours no leading zero 24hr

$date=date("h",$time);
echo "This is format h = ".$date;//10 //hours leading zero 12hr

$date=date("H",$time);
echo "This is format H = ".$date;//22 // hours leading zero 24hr

$date=date("i",$time);
echo "This is format i = ".$date;// 01 //minute leading zero

$date=date("j",$time);
echo "This is format j = ".$date;//5 // day no leading zero

$date=date("l",$time);
echo "This is format l = ".$date;//Tuesday //day

$date=date("L",$time);
echo "This is format L = ".$date;//1 // Leap Year(1 = true , 0 = false)

$date=date("m",$time);
echo "This is format m = ".$date;//03 //day of month leading 0

$date=date("M",$time);
echo "This is format F = ".$date;//Mar //(jan,feb)  //month

$date=date("n",$time);
echo "This is format n = ".$date;//3//day of month no leading 0

$date=date("r",$time);
echo "This is format F = ".$date;//Tue, 05 Mar 2024 23.10.53 +0630

$date=date("s",$time);
echo "This is format s = ".$date;//57seconds

$date=date("U",$time);
echo "This is format U = ".$date;//1708657889 // milisecond

$date=date("y",$time);
echo "This is format y = ".$date;//24 //year

$date=date("Y",$time);
echo "This is format Y = ".$date;//2024 // year

$date=date("z",$time);
echo "This is format z = ".$date;//64 day of the year


?>

<!-- https://www.php.net/manual/en/timezones.asia.php -->


<!-- 
    date_default_timezone_set
    date(format,timestampe)
 -->

 <!-- php timezone -->
