<?php

//=>array_combine(key,value) Function

$name=array("aung aung","su su","kyaw kyaw","hla hla");
$age=[30,25,35,40];

$result=array_combine($name,$age);
echo "<pre>".print_r($result,true)."</pre>";
echo $result["hla hla"];//40
echo $result["kyaw kyaw"];//35



//=>count(array) Function
$vehicles=["toyota","ford","audi","mazda","suzuki",'ford',"mazada","bmw"];
echo count($vehicles);//8



//=>sizeof(array) Function

$colors = ["red","green","blue","yellow","pink"];
echo sizeof($colors);//5



//=>array_count_values(array) Function
$cars=["toyota","ford","audi","mazda"];
echo count($cars);//4
// echo array_count_values($cars);//error
echo "<pre>".print_r(array_count_values($cars),true)."</pre>";

$brands=["toyota","ford","audi","mazda","suzuki",'ford',"mazda","bmw","Toyota"];
echo count($brands);//9
echo "<pre>".print_r(array_count_values($brands),true)."</pre>";




//=>array_chunk(array,length) Function
//=>array_chunk(array,lenght,preservekey)
//=> preservekey = true/false

$couples=["aung aung","su su","kyaw kyaw","nu nu","tun tun","yin yin","zaw zaw","aye aye"];
$result1 = array_chunk($couples,2);
echo "<pre>".print_r($result1,true)."</pre>";
echo $result1[0][1];//su su
$result2 = array_chunk($couples,2,true);
echo "<pre>".print_r($couples,2,true)."</pre>";//0 1 2 3 4 5
$result3 = array_chunk($couples,2,false);
echo "<pre>".print_r($result3,true)."</pre>";//01 01 01 01



//=>array_diff(array1,array2,......) Function
//Note:: we don't need to consider any index or keyname

$colors1 = ["red","green","blue","pink"];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","orange","violet"];

echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre>";
echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre>";
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),true)."</pre>";

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 = ["e"=>"red","f"=>"green","g"=>"black"];
echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>";
echo "<pre>".print_r(array_diff($colf2,$col1),true)."</pre>";



//=>arry_diff_assoc(array1,array2,.....) Function
//Note :: we need to consider any keyname and value (just for assoc array)

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue"];
echo "<pre>".print_r(array_diff_assoc($col1,$col2),true)."</pre>";
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>";


//=>array_diff_key(array1,array2,..) Function
//=> Note :: we need to consider any keyname (just for assoc array)

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green","f"=>"pink"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];
echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>";
echo "<pre>".print_r(array_diff_key($col2,$col1),true)."</pre>";




//=>array_intersect(array1,array2,....) Function
//Note :: we don't need to consider keyname
$num1=[10,20,30,60,70,80];
$num2=array(10,20,30,40,50,90,80);
echo "<pre>".print_r(array_intersect($num1,$num2),true)."</pre>";
echo "<pre>".print_r(array_intersect($num2,$num1),true)."</pre>";


$col1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2=["a"=>"red","f"=>"green","d"=>"orange"];
echo "<pre>".print_r(array_intersect($col1,$col2),true)."</pre>";
echo "<pre>".print_r(array_intersect($col2,$col1),true)."</pre>";




//=>array_fill(startindex,count,value) Function
echo "<pre>".print_r(array_fill(0,5,"green"),true)."</pre>";
echo "<pre>".print_r(array_fill(2,5,"blue"),true)."</pre>";


//=>array_fill_keys(keys,value) Function
$keys=["a","b","c","d"];
$values=["red","green","blue","pink"];
echo "<pre>".print_r(array_fill_keys($keys,"pink"),true)."</pre>";
echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>";




//=>array_key_exists(key,array) Function (just for assoc array)
$operators=['mpt'=>"ftth","ooredoo"=>"broadband"];

if(array_key_exists('mpt',$operators)){
    echo "Key exists";
}else{
    echo "Key dois not exist";
};




//=>array_merge(array1,array2,....) Function
$arr1 = ["red","green"];
$arr2 = array("blue","yellow");
$arr3 = ["orange","violet"];

echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>";
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>";



//=>array_keys(array) Function
//=>array_keys(array,value)
//=>array_keys(array,value,strict)

$phones=["mpt"=>"ftth","ooredoo"=>"broadband","telenor"=>"wifi"];

echo "<pre>".print_r(array_keys($phones),true)."</pre>";
echo array_keys($phones)[1];//ooredoo


echo "<pre>".print_r(array_keys($phones,"broadband"),true)."</pre>";//[0]=>ooredoo
echo array_keys($phones,"broadband")[0];//ooredoo


$numbers=[10,20,30,"10"];

echo "<pre>".print_r(array_keys($numbers,"10"),true)."</pre>";
echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>";

echo "<pre>".print_r(array_keys($numbers,"10",false),true)."</pre>";
echo "<pre>".print_r(array_keys($numbers,10,false),true)."</pre>";


echo "<pre>".print_r(array_keys($numbers,"10",true),true)."</pre>";
echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>";




//=>array_map(callbackfunction,array1,array2,....) Function
$males=["tun tun","aung aung","kyaw kyaw","thura","zaw zaw"];
$females=array("hla hla","su su","nu nu","yu yu","thida");

function genderone($name){
    return ("Mr".$name);
}

function gendertwo($male,$female){
    return ($male." & ".$female);
}

echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>";
echo "<pre>".print_r(array_map("gendertwo",$males,$females),true)."</pre>";




//=>sort(array) Function

$cars=["volve","bmw","toyota","mazda","suzuki"];
sort($cars);
echo "<pre>".print_r($cars,true)."</pre>";

$numbers=[10,50,"80",90,35,"100",130,"250",70];
sort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>";



//=>array_multisort(array) Function

$carbrands=["volve","bmw","toyota","mazda","suzuki"];
array_multisort($carbrands);
echo "<pre>".print_r($carbrands,true)."</pre>";

$luckynumbers=[10,50,"80",90,35,"100",130,"250",70];
array_multisort($luckynumbers);
echo "<pre>".print_r($luckynumbers,true)."</pre>";



//=>array_reverse(array) Function
$vehicles=["volve","bmw","toyota","mazda","suzuki"];
sort($vehicles);
echo "<pre>".print_r(array_reverse($vehicles),true)."</pre>";


$winnumbers=[10,50,"80",90,35,"100",130,"250",70];
array_multisort($winnumbers);
echo "<pre>".print_r(array_reverse($winnumbers),true)."</pre>";





//=>array_pad(array,length,value) Function
$colors=["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>";




//=>array_reduce(array,callback,initial) Function
$nums=[10,20,"30"];

function calfun($total,$val){
    return $total +=$val;
};

echo array_reduce($nums,"calfun",0);//60



//=> array_sum(array) Function

$nums = [10,20,30,40,50];
echo array_sum($nums);//150


$nums = [10,20,30,"40",50];
echo array_sum($nums);//-50


$nums = ["a"=>10.2,"b"=>20.3,"c"=>30.3];
echo array_sum($nums);//60.8




//=>array_search(value,array) Function
$myarrs=["a","b","c","d","e"];
echo array_search("d",$myarrs);//3

$myarrs=["a"=>"red","b"=>"green","c"=>"violet","d"=>"black","e"=>"blue"];
echo array_search("green",$myarrs);//b





//=>array_pop(array) Function
$colors=["red","green","blue"];
array_pop($colors);
echo "<pre>".print_r($colors,true)."</pre>";//([0]=>red[1] => green)



//=>array_shift(array) Function

$colors = ["red","green","blue"];
array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>";


$colors=["0"=>"red","1"=>"green","2"=>"blue","3"=>"violet"];
array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>";

$colors=["0"=>"red","1"=>"green","2"=>"blue","3"=>"violet"];
array_shift($colors);
array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>";




//unset(arrayindex) Funtion and array_values(array)  *********
$colors = ["red","green","blue"];
//unset($colors[1]);
//echo "<pre>".print_r($colors,true)."</pre>";//<pre>Array([0] => red[2] => blue)</pre>

unset($colors[1]);
echo "<pre>".print_r(array_values($colors),true)."</pre>";//<pre>Array([0] => red[1] => blue)</pre>


$colors=["a"=>"red","b"=>"green","c"=>"blue","d"=>"violet","e"=>"pink"];
echo "<pre>".print_r(array_values($colors),true)."</pre>";//<pre>Array([0] => red[1] => green[2] => blue[3] => violet[4] => pink)</pre>


$infos = ["name"=>'aung aung',"age"=>20,"city"=>"yangon"];
unset($infos["age"]);
echo "<pre>".print_r(array_values($infos),true)."</pre>";//<pre>Array(0] => aung aung[1] => yangon)</pre>



//=>array_unshift(array,value1,value2,value3,.....) Function

$colors=["red","green","blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";


$colors=["0"=>"red","1"=>"green","2"=>"blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors=["a"=>"red","b"=>"green","c"=>"blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";



//=>array_push(array,value1,value2,value3,.....) Function
$colors=["red","green","blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";


$colors=["0"=>"red","1"=>"green","2"=>"blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";

$colors=["a"=>"red","b"=>"green","c"=>"blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>";




//=>array_slice(array,index)  Function
//=>array_slice(array,index,length)
//=>array_slice(array,index,length,preserve)


$candycolors = ["red","green","blue","yellow","pink"];
echo "<pre>".print_r(array_slice($candycolors,0),true)."</pre>";//[red to pink]
echo "<pre>".print_r(array_slice($candycolors,2),true)."</pre>";//[blue to pink]

echo "<pre>".print_r(array_slice($candycolors,0,2),true)."</pre>";//[red to green]
echo "<pre>".print_r(array_slice($candycolors,2,2),true)."</pre>";//[blue to yellow]
echo "<pre>".print_r(array_slice($candycolors,2,5),true)."</pre>";//[blue to pink]

echo "<pre>".print_r(array_slice($candycolors,2,5,false),true)."</pre>";
echo "<pre>".print_r(array_slice($candycolors,2,5,true),true)."</pre>";



//=>array_splice(array,index)  Function
//=>array_splice(array,index,length)
//=>array_splice(array,index,length,array)

$shirtcolors = ["red","green","blue","yellow","pink"];

echo "<pre>".print_r(array_splice($shirtcolors,0),true)."</pre>";//[red to pink]
echo "<pre>".print_r(array_splice($shirtcolors,2),true)."</pre>";//[blue to pink]

echo "<pre>".print_r(array_splice($shirtcolors,0,2),true)."</pre>";//[red to green]
echo "<pre>".print_r(array_splice($shirtcolors,2,2),true)."</pre>";//[blue to yellow]
echo "<pre>".print_r(array_splice($shirtcolors,2,5),true)."</pre>";//[blue to pink]

echo "<pre>".print_r(array_splice($shirtcolors,2,5,false),true)."</pre>";
echo "<pre>".print_r(array_splice($shirtcolors,2,5,true),true)."</pre>";


$males = ["aung aung","maung maung","kyaw kyaw","zaw zaw","naung naung"];
$females = ["su su","yu yu","nu nu"];
// array_splice($males,0,2,$females);
// echo "<pre>".print_r($males,true)."</pre>";


// array_splice($males,0,3,$females);
// echo "<pre>".print_r($males,true)."</pre>";

array_splice($males,1,3,$females);
echo "<pre>".print_r($males,true)."</pre>";//<pre>Array([0] => aung aung[1] => su su[2] => yu yu[3] => nu nu   [4] => naung naung)</pre>




//=>array_unique(array) Function

$num = [10,20,30,50,10,30,60,70,80,10];
echo "<pre>".print_r(array_unique($num),true)."</pre>";//<pre>Array([0] => 10[1] => 20[2] => 30[3] => 50[6] => 60[7] => 70[8] => 80)</pre>

$colors = ["a"=>"red","b"=>"green","c"=>"blue",'d'=>"red","e"=>"blue"];
echo "<pre>".print_r(array_unique($colors),true)."</pre>";




//=> array_walk(array,callbackfunction) Function
//=> array_walk(array,callbackfunction,parameter)


$colors=["a"=>"red","b"=>"green","c"=>"blue","d"=>"pink","e"=>"violet"];

function myfunone($val,$key){
    echo "Key is = $key and Value is $val. ";
};

array_walk($colors,"myfunone");

function myfuntwo($val,$key,$p){
   echo "Key is = $key and Value is $val $p. ";
};

array_walk($colors,"myfuntwo","colour");



function myfunthree(&$val){
    // $val = "orange";
    return $val = "orange";
};

array_walk($colors,"myfunthree");
echo "<pre>".print_r($colors,true)."</pre>";



//=>compact(val1,val2,val3,.......) Function

$name = "Aung Aung";
$age = "25";
$city = "Yangon";

$result = compact("name","age","city");
echo "<pre>".print_r($result,true)."</pre>";//<pre>Array([name] => Aung Aung[age] => 25[city] => Yangon)</pre>




//=>range(start,end) Function
//=>range(start,end,step)

$num1 = range(0,5);
echo "<pre>".print_r($num1,true)."</pre>";


$num2 = range(0,50,10);
echo "<pre>".print_r($num2,true)."</pre>";//<pre>Array([0] => 0[1] => 10[2] => 20[3] => 30[4] => 40[5] => 50)</pre>

$char1 = range("a","k");
echo "<pre>".print_r($char1,true)."</pre>";

$char2 = range("k","g");
echo "<pre>".print_r($char2,true)."</pre>";//<pre>Array[0] => k[1] => j[2] => i[3] => h[4] => g)</pre>




//=> current(),pos(),next(),end(),prev(),reset() Function

$students = ["aung aung","maung maung","zaw zaw","tun tun","kyaw kyaw"];
//echo current($students);//aung aung
// echo pos($students);//aung aung

// echo end($students);//kyaw kyaw
// echo current($students);//kyaw kyaw


// echo current($students);//aung aung
// echo next($students);//maung maung
// echo current($students);//maung maung
// echo next($students);//zaw zaw
// echo prev($students);//maung maung


echo end($students);//kyaw kyaw
echo current($students);//kyaw kyaw
echo prev($students);//tun tun

echo reset($students);
echo current($students);//aung aung



//=> serialize() , unserialize() Function

$staffs = [
    ["aung aung","maung maung","kyaw kyaw","tun tun","zaw zaw"],
    ["su su",'yu yu',"nu nu","aye aye","hla hla"]
];

echo "<pre>".print_r($staffs,true)."</pre>";

$seriadatas = serialize($staffs);
echo $seriadatas;//a:2:{i:0;a:5:{i:0;s:9:"aung aung";i:1;s:11:"maung maung";i:2;s:9:"kyaw kyaw";i:3;s:7:"tun tun";i:4;s:7:"zaw zaw";}i:1;a:5:{i:0;s:5:"su su";i:1;s:5:"yu yu";i:2;s:5:"nu nu";i:3;s:7:"aye aye";i:4;s:7:"hla hla";}}
var_dump($seriadatas);//string(209) "a:2:{i:0;a:5:{i:0;s:9:"aung aung";i:1;s:11:"maung maung";i:2;s:9:"kyaw kyaw";i:3;s:7:"tun tun";i:4;s:7:"zaw zaw";}i:1;a:5:{i:0;s:5:"su su";i:1;s:5:"yu yu";i:2;s:5:"nu nu";i:3;s:7:"aye aye";i:4;s:7:"hla hla";}}"

$nuseriadatas = unserialize($seriadatas);
echo "<pre>".print_r($nuseriadatas,true)."</pre>";


?>



<!-- 
array_combine()
count()
sizeof()
array_count_values()
array_chunk()
array_diff()
array_diff_assoc()
array_diff_key()
array_intersect()
array_fill()
array_fill_key()

array_key_exists()
array_merge()
array_keys(array,value,strict)
array_map(function,array,array,...)
sort()
array_multisort()
array_reverse()
array_pad()
array_reduce()
array_sum()

array_search()
array_pop()
array_shift()
unset()
array_values()
array_push()
array_unshift()
array_slice()
array_splice()
array_unique()

array_walk()
compact()
range()
current(),pos(),next(),prev(),end(),reset()
serialize()
unserialize()

-->