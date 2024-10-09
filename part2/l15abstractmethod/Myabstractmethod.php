<?php

ini_set("display_errors",true);

// Note :: Interface's methods cann't include body
// Note :: Modifier must be public in Interface. cuz we need to override
// Note :: To use an interface , a class must use to implements keyword.
// Note :: A class that implements an interface must implements all of the interface's methods.
// Note :: Can't contain properties / common methods but can contain constant variable


// Note :: Abstract's methods cann't include body
// Note :: Any Modifier can set in abstract
// Note :: To use an abstract method , a class must use to extend keyword.
// Note :: A class that extends sub class must extends all of the abstruct's methods.
// Note :: Can contain no static properties / static properties / common methods and can contain constant variable
// NOte :: When we set abstract method !!! class must be abstruct class as well.



abstract class Myabstractmethod{

     public $id = 50;
     public static $notifi = "New Article Created";
     const TITLE = "This is a new article for SPORT";

     //Common Method 

     public function createpost(){
          echo "I am from create post . Post title is = ".self::TITLE . "<br/>";
     }

     public function readpost(){
          echo "I am read post . ID is = ". $this->id . "<br/>";
     }

     abstract public function updatepost($id,$title);

     public function deletepost($id){
          echo "I am delete post . ID is {$id} <br/>";
     }

}

class Articles extends Myabstractmethod{

     public function updatepost($id,$title){
          echo "i am from update . ID is {$id} . Title is {$title}. <br/>";
     }

}


echo "This is Abstract Method <br/>";

//ERROR :: We can not instantiate abstract Method 
// $obj = new Myabstractmethod();//Error

$obj2 = new Articles();
echo $obj2 ->id;
echo "<br/>";
echo $obj2::$notifi; 
echo "<br/>";
echo $obj2::TITLE;
echo "<br/>";

$obj2->createpost();
$obj2->readpost();
$obj2->updatepost(20,"This is new post 20");
$obj2->deletepost(100);

echo "<hr/>";


abstract class Info{

     abstract protected function name();
     abstract protected function age();
     abstract protected function professional($gender);

     public function getname(){
          return $this->name();
     }

     public function getage(){
          return $this->age();
     }

     public function getprofessional($sex){
          return $this->professional($sex);
     }

}

class Boyclass extends Info{

     public function name(){
          return "Ko Zaw Zaw";
     }

     public function age(){
          return 25;
     }

     public function professional($gender){

          switch($gender){
               case "male":
                    $job = "Engineer";
                    break;
               case "female":
                    $job = "Doctor";
                    break;
               default:
                    $job = "Developer";
                    break;
          }

          return $job;

     }

}

class Girlclass extends Info{

     protected function name(){
          return "Ms.July";
     }

     protected function age(){
          return 30;
     }

     protected function professional($gender){

          switch($gender){
               case "male":
                    $job = "Engineer";
                    break;
               case "female":
                    $job = "Doctor";
                    break;
               default:
                    $job = "Developer";
                    break;
          }

          return $job;

     }

}

$boyobj = new Boyclass();
$boyname = $boyobj->name();
$boyage = $boyobj->age();
$boypro = $boyobj->professional("male");

echo "{$boyname} is {$boyage} years old & he is an {$boypro} <br/>";

$girlobj = new Girlclass();
$girlname = $girlobj->getname();
$girlage = $girlobj->getage();
$girlpro = $girlobj->getprofessional("female");

echo "{$girlname} is {$girlage} years old & he is an {$girlpro} <br/>";


?>