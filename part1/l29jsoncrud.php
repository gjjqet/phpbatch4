<?php

$getdatas = file_get_contents("l29studentdb.json");
//echo $getdatas;
$datasde = json_decode($getdatas,true); //array
// echo "<pre>".print_r($datasde,true)."</pre>";

//=> Read

foreach($datasde as $datas){
  echo "<pre>".print_r($datas,true)."</pre>";

  foreach($datas as $key => $data){
    echo $key."=".$data."<br/>";
  }

  echo "<hr/>";
}

//=> Create 

$newdatas = [
    [
        "id"=>8,
        "name"=>"lin lin",
        "city"=>"mandalay"
    ],
    [
        "id"=>9,
        "name"=>"chit thu wai",
        "city"=>"mandalay"
    ],
    [
        "id"=>10,
        "name"=>"honey nway oo",
        "city"=>"mandalay"
    ]
];


?>