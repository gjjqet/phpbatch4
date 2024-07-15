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

//sudo chmod 777 -R l29studentdb.json 

// foreach($newdatas as $newdata){
//   array_push($datasde,$newdata);
//   file_put_contents("./l29studentdb.json",json_encode($datasde));
// }




//=> Update 

// foreach($datasde as $key=>$datas){
//   echo $datas:
//   echo "<pre>".print_r($datas,true)."<pre/>";
//   echo $key:// 0 to 9

//   echo "<pre>".print_r($datasde[$key],true)."<pre/>";
//   echo $datas["id"];// 1 to 10 

//   if($data["id"]===9 ){
//     // id number 9 = index number 8
//     // $datasde[$key]["name"] = "chit hsu wai";

//     $datasde[8]["name"] = "sandar";
//   }

// }

// // do save 
// file_put_contents("./l29studentdb.json",json_encode($datasde));





// => Delete 

$idxs = [];

//select index to delete

foreach($datasde as $key=>$datas){
  //echo "<pre>".print_r($datas,true)."<pre/>";

  if($datas["id"]=== 10){
    $idxs[] = $key; // index number 9
  }
}

//delete value from array 
foreach($idxs as $idx){
  unset($datasde[$idx]);
}


//do save 
file_put_contents("./l29studentdb.json",json_encode($datasde));

?>