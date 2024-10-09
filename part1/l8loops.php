<?php

//=>PHP Looping

//for
//forEach
//while
//do..while

$colorones=["red","green","blue","white","black","gray","pink"];//indexed array
echo count($colorones);//7
//echo $colorones;//error
var_dump($colorones);

$coloroneskeys=array_keys($colorones);
//echo $coloroneskeys;//error
var_dump($coloroneskeys);

//For

for($i=0;$i<count($colorones);$i++){
   //echo $i;//0 to 6

   echo "This is indexed array or manual array by forloop = index key is ".$i." and value is =".$colorones[$i]."<br/>";
   echo "This is indexed array or manual array by forloop = index key is ".$coloroneskeys[$i]." and value is =".$colorones[$i]."<br/>";
   echo " This is indexed array or manual array by forloop = index key is ". "$i and value is $colorones[$i]";
};

foreach($colorones as $colorone){
   echo "This is indexed array or manual array by foreach".$colorone;
};

                      //idx    value
foreach($colorones as $key=>$colorone){
   //echo $key;
   echo " key is".$key." value is ".$colorone.". ";
   
};


$x=0;
while($x<count($colorones)){
    echo "My fav color is ".$colorones[$x]."index number is ".$x;
   //echo "My fav color is ".$colorones[$x]."index number is ".$coloroneskeys[$x];
   $x++;
};

$y=0;
do{
 //echo "My fav color is ".$colorones[$y];
 echo "My fav color is ".$colorones[$y]."index number is ".$coloroneskeys[$y];
 $y++;
}while($y<count($colorones));





?>


<!-- 
   for(){}
   foreach(mainarray as $key=> value){}
   while
   do{}while()
 -->