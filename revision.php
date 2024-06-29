<?php 

$readjsondata = file_get_contents("revision.json");
echo $readjsondata;

echo "<hr/>";

$decodeforjson = json_decode($readjsondata,true);
// echo "<pre>".print_r($decodeforjson,true)."</pre>";


foreach($decodeforjson as $decode){
    // echo "<pre>".print_r($decode,true)."</pre>"."<hr/>";

    foreach($decode as $key=>$deco){
        echo $key."=".$deco."<br/>";
    }

    echo "<hr/>";

}




?>