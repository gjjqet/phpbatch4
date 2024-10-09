<?php

$string = "We are family";
echo $string;

//preg_match(patten,string);

// $result = preg_match("We are family",$string); //error

$result = preg_match("/We are family/",$string);//true
$result = preg_match("/family/",$string);//true
$result = preg_match("/Family/",$string);//false
$result = preg_match("/mily/",$string);//true


$result = preg_match("/mily$/",$string);//true
$result = preg_match("/family$/",$string);//true
$result = preg_match("/Family$/",$string);//false
$result = preg_match("/are$/",$string);//false
$result = preg_match("/We$/",$string);//false


$result = preg_match("/^mily/",$string);//false
$result = preg_match("%^are%",$string);//false
$result = preg_match("#^we#",$string);//false
$result = preg_match("!^We!",$string);//true


$result = preg_match("/^family$/",$string);//false   Note :: string must be exact "family";
$result = preg_match("/^$/",$string);//false         Note :: string must be empty


$result = preg_match("/^we/",$string);//false
$result = preg_match("/^we/i",$string);//true
$result = preg_match("/^We/i",$string);//true



$result = preg_match("/[b-d]/",$string);//false
$result = preg_match("/[a-f]/",$string);//true
$result = preg_match("/[a-z]/",$string);//true
$result = preg_match("/[A-Z]/",$string);//true
$result = preg_match("/[0-4]/",$string);//false



$string = "my lucky number is 567";

$result = preg_match("/[0-4]/",$string);//true
$result = preg_match("/[5-9]/",$string);//true
$result = preg_match("/[a-z]/",$string);//true
$result = preg_match("/[A-Z]/",$string);//false
$result = preg_match("/[A-Z | a-z]/",$string);//true
$result = preg_match("/[A-Z,a-z]/",$string);//true
$result = preg_match("/^[a-z]/",$string);//true
$result = preg_match("/[a-z]$/",$string);//false
$result = preg_match("/^[5-9]/",$string);//false
$result = preg_match("/[5-9]$/",$string);//true


$result = preg_match("/[^a-z]/",$string);//true  Note :: it's mean that not include a to z!, result is true cuz $string included spacing and digit
$result = preg_match("/[^5-9]/",$string);//true   Note :: it's mean that not include a to z!, result is true cuz $string included spacing and letter
$result = preg_match("/[^0-4]/",$string);//true   Note :: it's mean that not include a to z!, result is true cuz $string included spacing and letter

$result = preg_match("/@/",$string);//false



$string = "admin@gamil.com";

$result = preg_match("/@/",$string);//true
$result = preg_match("/m/",$string);//true
$result = preg_match("/m+/",$string);//true
$result = preg_match("/b/",$string);//false
$result = preg_match("/b+/",$string);//false
$result = preg_match("/b*/",$string);//true
$result = preg_match("/@?/",$string);//true

$result = preg_match("/m{1}/",$string);//true
$result = preg_match("/m{2}/",$string);//false



$string = "adminn@gamil.com";

$result = preg_match("/n{1}/",$string);//true
$result = preg_match("/n{2}/",$string);//true
$result = preg_match("/n{3}/",$string);//false
$result = preg_match("/n{2,3}/",$string);//true
$result = preg_match("/n{2,}/",$string);//true


$result = preg_match("/\s/",$string);//false

$string = "V8 Engine";
$result = preg_match("/\s/",$string);//true
$result = preg_match("/\d/",$string);//true
$result = preg_match("/\D/",$string);//true
$result = preg_match("/\w/",$string);//true
$result = preg_match("/\W/",$string);//true

$string = "528";
$result = preg_match("/\d/",$string);//true
$result = preg_match("/\D/",$string);//false
$result = preg_match("/\w/",$string);//true
$result = preg_match("/\W/",$string);//false



$string = "admin@gamil.com";
$result = preg_match("/a\wm/",$string);//true
$result = preg_match("/a\w{1}m/",$string);//true
$result = preg_match("/a\w{2}m/",$string);//false   , cuz any exact 2 words         //adbmin@gamil.com
$result = preg_match("/a\w{2,4}m/",$string);//false ,  cuz any exact 2 to 4 words    // adbcdmin@gamil.com
$result = preg_match("/a\w{2,}m/",$string);//false ,  cuz any exact 2 to more words   //adbcdefgmin@gamil.com


$result = preg_match("/a.m/",$string);//true
$result = preg_match("/a..m/",$string);//false      //adbmain@gamil.com
$result = preg_match("/a.{1}m/",$string);//true
$result = preg_match("/a.{2}m/",$string);//false  , cuz any exact 2 words   // adbmin@gamil.com
$result = preg_match("/a.{2,4}m/",$string);//false , cuz any exact 2 to 4 words  // adbcdmin@gamil.com
$result = preg_match("/a.{2,}m/",$string);//false   , cuz any exact 2 to more words  //adbcdefgmin@gamil.com


$string = "PHP";
$result = preg_match("/.{2}/",$string);//true


$string = "php";
$result = preg_match("/hp/",$string);//true
$result = preg_match("/p(hp)*/",$string);//true
$result = preg_match("/p(hp)+/",$string);//true    , false condition = p ,pbp , pcc , p hp


$string = "Vv";
$result = preg_match("/.{2}/",$string);//true
$result = preg_match("/^.{2}$/",$string);//true , exact any 2 characters


$string = "Welcome to our <i>programming class</i>";
$result = preg_match("/<i><\/i>/",$string);//false
$result = preg_match("/<i>\w<\/i>/",$string);//false  , cuz one chas
$result = preg_match("/<i>\w*<\/i>/",$string);//false , cuz contained space
$result = preg_match("/<i>.<\/i>/",$string);//false
$result = preg_match("/<i>.*<\/i>/",$string);//true
$result = preg_match("/<i>(.*)<\/i>/",$string);//true


$string = "admin@gamil.com";
$result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string);

//adminl@gamil.com

preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string);




//=>preg_replace(pattern,replace,string)
$string = "Are you ready to learn PHP Framework";
$result = preg_replace("/php/","javascript",$string);//Are you ready to learn php Framework
$result = preg_replace("/php/i","javascript",$string);//Are you ready to learn javascript Framework
$result = preg_replace("/\s/","",$string);//AreyoureadytolearnjavascriptFramework



//=>Bracket Expression
$string = "admin123@gamil .com";

$result = preg_replace("/[[:space:]]/","",$string);
$result = preg_replace("/[[:space:]]/","x",$string);
$result = preg_replace("/[[:alpha:]]/","x",$string);
$result = preg_replace("/[[:digit:]]/","x",$string);
$result = preg_replace("/[[:alnum:]]/","x",$string);
$result = preg_replace("/[[:punct:]]/","x",$string);


$string = "Admin@gmail. Com";
$result = preg_replace("/[[:lower:]]/","x",$string);
$result = preg_replace("/[[:upper:]]/","x",$string);

$string = "Are you ready to learn PHP Framework";
$result = preg_replace(["/PHP/","/framework/"],["Javascript","libraries"],$string);//Are you ready to learn Javascript Framework
$result = preg_replace(["/PHP/","/framework/i"],["Javascript","libraries"],$string);//Are you ready to learn Javascript libraries

$string = "My lucky number is 007 but i got tick number 5700";
$result = preg_replace("/[0-9]/","x",$string);//My lucky number is xxx but i got tick number xxxx
$result = preg_replace("/[0-9]+/","x",$string);//My lucky number is x but i got tick number x


echo $result;


                            //no limit = 0 or null
//=>preg_split(patten,string,limit,flags)

$string = "My lucky number is 007";
$result = preg_split("/\s/",$string);
// echo $result;//error , Array to String conversion
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0];//My
echo $result[4];//conversion

$result = preg_split("/\s/",$string,2);
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0];//My
echo $result[1];//lucky number is 007

$string = "My lucky number is 007 but i got tick number 5700";
$result = preg_split("/\s/",$string);
$result = preg_split("/[\s]/",$string);
$result = preg_split("/\s,/",$string);//[0]=>My lucky number is 007 but i got tick number 5700
$result = preg_split("/[\s,]/",$string);

$result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result = preg_split("/[\s,]/",$string,0,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string);
$result = preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string,0,PREG_SPLIT_NO_EMPTY);


echo "<pre>".print_r($result,true)."</pre>";



//=>preg_quote(string,delimeter);

$string = "He\'s my father,do you know him ?";

$result = preg_quote($string);//He\\'s my father,do you know him \?
$result = preg_quote($string,"o");//He\\'s my father,d\o y\ou kn\ow him \?

echo $result;


//=>preg_match_all(pattern,string,match/return,flags);

$string = "Winning numbers are 227-777 , but my ticket number are 007-022 & 112233";

preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
preg_match_all("/\d+-\d+/",$string,$result,PREG_PATTERN_ORDER);
// echo $result;//error , Array to Sring conversion
echo "<pre>".print_r($result,true)."</pre>";



//=>Lookahead & Lookbehind
//(?=)positive lookahead (or) regex loolahead = right hand side
//(?<=)positive lookbehind (or) regex lookbehind = left hand side

//(?!)negative lookahead (or) regex loolahead
//(?<!)negative lookbehind (or) regex lookbehind 

$string = "aungkyaw@cisco.com";
$result = preg_match("/@(?=cisco)/",$string);//true (positive lookahead)
$result = preg_match("/(?<=@)cisco/",$string);//true (positive lookbehind)

$result = preg_match("/@(?!cisco)/",$string);//false (negative lookahead)
$result = preg_match("/(?<!@)cisco/",$string);//false (negative lookbehind)

echo $result;


?>

<!-- 
    $ must be end (case sensitive)
    ^ must be start (casd sensitive) , caret or circumflex , shift+6
    i no case sensitive
    [] range a-z A-Z 0-9
    m+ must be containe at least one m and more
    m* can contain b or not and more
    m? can contain b or not and more
    m{nth} contain (same place or couple) place m as per nth and more
    m{nth,nth} contain some place m as per nth and more
    m{nth,} contain some place m as per nth and more

    /s space
    /d digit
    /D any not digit 
    /w any word   [a-z][A-Z][0-9]
    /W any        @#$* space . ?

    . any character
    ()this
    + must
    * can

    p(hp)* can be cotain hp
    p(hp)+ must be contain hp
    

    [[:space:]] space characters
    [[:alpha:]] alphabetic characters
    [[:digit]]  digit characters
    [[:alnum:]] alphanumeric characters
    [[:punct:]] punctuation characters
    [[:lower:]] lower-case characters
    [[:upper:]] uppder-case characters

    
 -->


 <!-- 
    preg_match(pattern,string)
    preg_replacd(patten,replace,string)
    preg_split(patten,string,limit,flags)
    preg_quote(string,delimiter)
    preg_match_all()
    lookahead & lookbehind
 -->