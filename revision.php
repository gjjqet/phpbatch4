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


// [
//     {
//         "id":1,
//         "name":"Su Su",
//         "city":"Mandalay"
//     },
//     {
//         "id":2,
//         "name":"Nu Nu",
//         "city":"Mandalay"
//     },
//     {
//         "id":3,
//         "name":"Yu Yu",
//         "city":"Mandalay"
//     },
//     {
//         "id":4,
//         "name":"Aung Aung",
//         "city":"Mandalay"
//     },
//     {
//         "id":5,
//         "name":"kyaw kyaw",
//         "city":"Mandalay"
//     },
//     {
//         "id":6,
//         "name":"Soe Thu",
//         "city":"Mandalay"
//     },
//     {
//         "id":7,
//         "name":"Aung Kyaw",
//         "city":"Mandalay"
//     }
// ]



?>