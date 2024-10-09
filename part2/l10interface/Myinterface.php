<?php

// Note :: Interface's methods cann't include body
// Note :: Modifier must be public in Interface. cuz we need to override
// Note :: To use an interface , a class must use to implements keyword.
// Note :: A class that implements an interface must implements all of the interface's methods.
// Note :: Can't contain properties / common methods but can contain constant variable

interface News{
     const CAPTION = "This is new article for SPORT";
     public function createpost();
     public function readpost($id);
     public function updatepost($id,$title);
     public function deletepost($id);
}

class Myinterface implements News{

     public function createpost(){
          echo 'i am from create post.'.self::CAPTION . "<br/>";
        
      }


     public function readpost($id){
          echo "i am from read post. & id is = {$id}" . "<br/>";
     }

     public function updatepost($id,$title){
          echo "i am from update post. & id is = {$id} . Title is {$title}" . "<br/>";
     }


     public function deletepost($id){
          echo "i am delete delete post .<br/>";
     }

     
     public function test(){
          echo "i am test";
     }
  
}

class Articles implements News{

     public function test(){
          echo "i am test";
     }

     public function createpost(){
          echo 'i am from create article post.'.self::CAPTION . "<br/>";
     }

     public function readpost($id){
          echo "i am from read article post. & id is = {$id}" . "<br/>";
     }

     public function updatepost($id,$title){
          echo "i am from update article post. & id is = {$id} . Title is {$title}" . "<br/>";
     }


     public function deletepost($id){
          echo "i am delete delete article post .<br/>";
     }

     

}

echo "This is Myinterface <br/>";

$obj = new Myinterface();
$obj->createpost();
$obj->readpost(10);
$obj->updatepost(10,"This is new post 10");
$obj->deletepost(10);
$obj->test();

echo "<hr/>";

$obj = new Articles();
$obj->createpost();
$obj->readpost(10);
$obj->updatepost(10,"This is new post 10");
$obj->deletepost(10);
$obj->test();

echo "<hr/>";

?>