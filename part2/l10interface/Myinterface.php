<?php

// Note :: Interface's methods cann't include body
// Note :: Modifier must be public in Interface. cuz we need to override
// Note :: To use an interface , a class must use to implements keyword.
// Note :: A class that implements an interface must implements all of the interface's methods.
// Note :: Can't contain properties / common methods but can contain constant variable

interface News{
     const CAPTION = "This is article for SPORT";
     public function createpost();
     public function readpost($id);
     public function updatepost($id,$title);
     public function deletepost($id);
}

class Myinterface implements News{

     public function createpost(){

     }

     public function readpost($id){

     }

     public function updatepost($id,$title){

     }


     public function deletepost($id){

     }

     
     public function test(){

     }
  
}

class Article implements News{

     public function test(){

     }

     public function createpost(){

     }

     public function readpost($id){

     }

     public function updatepost($id,$title){

     }


     public function deletepost($id){

     }


}

echo "This is Myinterface <br/>";

$obj = new Myinterface();

echo "<hr/>";

?>