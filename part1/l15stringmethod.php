<?php

//=> strlen(string) Function

$words='Save Myanmar';
echo strlen($words);


//=> str_word_count(string) Function
//=> str_word_count(string,return) Function

//0 - Default
//1 - Return an array
//2 - Return an array

$text="Save Myanmar Country";
echo str_word_count($text);//3

echo str_word_count($text,0);//3
echo "<pre>". print_r(str_word_count($text,1),true)."</pre>";
echo "<pre>". print_r(str_word_count($text,2),true)."</pre>";





//=>ucwords(string) Function
//=>ucwords(string,delimiters) Function

$country="welcome to myanmar country,i live in yangon";
echo ucwords($country);//Welcome To Myanmar Country,i Live In Yangon
echo ucwords($country,",");//Welcome To Myanmar Country, I live in yangon




//=> ucfirst(string) Function

$message="welcome to yangon,i live in tamwe";
echo ucfirst($message);//Welcome to yangon,i live in tamwe




//=> lcfirst(string) Function

$msg="Welcome to Yangon , I live in tamwe";
echo lcfirst($msg);//welcome to Yangon , I live in tamwe




//=> strtoupper(string) Function

$string="welcome to my country";
echo strtoupper($string);//WELCOME TO MY COUNTRY



//=> strtolower(string) Function

$str="Welcome to My Country";
echo strtolower($str);//welcome to my country




//=> chunk_split(string,length,delimeter) Function

$letters="Myanmar Country";
echo chunk_split($letters,1,".");//M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo chunk_split($letters,3,"-");//Mya-nma-r C-oun-try-




//=> substr(string,start index/offset,end length) Function

$country="Welcome Myanmar";
echo substr($country,0);//Welcome Myanmar
echo substr($country,8);//Myanmar
echo substr($country,0,7);//Welcome
echo substr($country,0,9);//Welcome M




//=>strpos(string,find) Function
//=>strrpos(string,find) Function
//=>stripos(string,find) Function
//=>strripos(string,find) Function

$caption="Lorem Ipsum is simply dummy text of the printing and typesetting industry Ipsum.";
echo strpos($caption,"Ipsum");//6 (index number)
echo strrpos($caption,"Ipsum");//74 (index number)
echo stripos($caption,"Printing");//40 (index number)
echo strripos($caption,"Ipsum");//74 (index number)




//=> str_replace(search,replace,string) Function

$topic="Save Myanmar";
echo str_replace("Myanmar","CRPH",$topic);//Save CRPH



//=>substr_replace(string,replace,start index) Function
//=>substr_replace (string,replace,start index,end length) Function

$greeting="Welcome Myanmar";
echo substr_replace($greeting,"Hello",0);//Hello
echo substr_replace($greeting,"Thailand",8);//Welcome Thailand

echo substr_replace($greeting,"Hello",0,0);//HelloWelcome Myanmar
echo substr_replace($greeting,"Hello",0,3);//Hellocome Myanmar
echo substr_replace($greeting,"Hello",0,7);//Hello Myanmar




//=>trim() Function
//=>trim(string,characters) Function

$title=" Welcome to My Country ";
echo trim($title);//Welcome to My Country

$subtitle="Welcome to My Country";
echo trim($subtitle,"Wel");//come to My Country
echo trim($subtitle,"try");//Welcome to My Coun






//=>ltrim() Function
//=>ltrim(string,characters)  Function
$sayhi="/Mingalarpar/";
echo ltrim($sayhi);// /Mingalarpar/
echo ltrim($sayhi,"/");// Mingalarpar/




//rtrim() Function
//rtrim(string,character) Function
$sayhello="/Mingalarpar/";
echo $sayhello;// /Mingalarpar/;
echo rtrim($sayhello,"/");




//--------------------------------------------------------------



//=>str_repeat() Function
//=>str_repeat(string,count) Function
echo str_repeat("A Kyal Gyi",3);//A Kyal GyiA Kyal GyiA Kyal Gyi



//=>strcmp(string1,string2) Function (case-sensitive)
// 0 = if the two strings are equal
// <0 = if string1 is less than string2
// >0 = if string1 is greater than string2

echo strcmp("I Love My Job","I Love My Job"); // 0
echo strcmp("I Love My Job","I Love"); //7
echo strcmp("I Love","I Love My Job"); //-7



//=>explode(sperator,string,limit) Function
$words="Welcome to My Country";
echo "<pre>".print_r(explode(" ",$words),true)."</pre>";

echo "<pre>".print_r(explode(" ",$words,0),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,1),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,2),true)."</pre>";
echo "<pre>".print_r(explode(" ",$words,3),true)."</pre>";



//=>implode(sperator,array) Function
$words=["Welcome","to","My","Country"];
echo implode(" ",$words);
echo implode("-",$words);




//=>join(sperator,array) Function
$words=["Welcome","to","My","Village"];
echo join(" ",$words);
echo join("_",$words);




//=>number_format(number) Function
//=>number_format(number,decimals)

echo number_format("1000000");//1,000,000
echo number_format("1000000",2);//1,000,000.00




//=>stripslashes(string) Function
$str='he\'s my mother';
echo $str;//he's my mother;

$str="he\'s my father";
echo $str;//he\'s my father;
echo stripslashes($str);//he's my father;



//=>basename(path) Function
//=>basename(path,sufix) Function

$path="./assets/img/cover.jpg";
echo $path;//./assets/img/cover.jpg
echo basename($path);//cover.jpg
echo basename($path,".jpg");//cover




//=>pathinfo(path) Function
//=>pathinfo(path,flags)

//PATHINFO_DIRNAME
//PATHINFO_BASENAME
//PATHINFO_EXTENSION
//PATHINFO_FILENAME

$filepath="./assets/img/user/cover.jpg";
//echo pathinfo($filepath);//error

echo "<pre>".print_r(pathinfo($filepath),true)."</pre>";
echo pathinfo($filepath)["dirname"];
echo pathinfo($filepath)["filename"];

echo pathinfo($filepath,PATHINFO_DIRNAME);//./assets/img/user
echo pathinfo($filepath,PATHINFO_BASENAME);//cover.jpg
echo pathinfo($filepath,PATHINFO_EXTENSION);//jpg
echo pathinfo($filepath,PATHINFO_FILENAME);//cover



?>

<!-- 
    strlen(string)
    str_word_count(string) , str_word_count(string,0) , str_word_count(string,1) , str_word_count(string,2)
    ucwords(string) , ucwords(string,delimeters)
    ucfirst(string)
    lcfirst(string)
    strtoupper(string)
    strtolower(string)
    chunk_split(string,length,delimeter)
    substr(string,start index/offser,end)
    strpos(string,find),strrpos(),stripos(),strripos();
    str_replace(find,replace,string)
    substr_replace(string,replace,start index,end length)
    trim(string,"welcome")
 -->