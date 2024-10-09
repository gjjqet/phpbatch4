<?php

ini_set("display_errors",1);

// echo __DIR__;

require_once("Music.php");
require_once("Video.php");
require_once("gallery/Photo.php");
require_once("gallery/animateshow/Portrait.php");
require_once("gallery/slideshow/Image.php");
require_once("gallery/slideshow/Picture.php");

use gallery\slideshow\Image; // Method 2
use gallery\slideshow as viewer;; // Mehod 2

// spl_autoload_register(function($classname){
//     echo "Loading the class = {$classname} <br/>";

//     $file = $classname;

//     // echo $file;

//         //    str_replace(fin,replace,string)
//     $file = str_replace("\\","/",$classname).".php";

//     // echo $file . "<br/>";

//     if(file_exists($file)){
//         require_once(__DIR__ ."/". $file);
//     }else{
//         "No file Exists";
//     }
// });


$musicobj = new Music();
$musicobj->play();


$vidoobj = new Video();
$vidoobj->play();


$photoobj = new gallery\Photo();
$photoobj->play();

$portrait = new gallery\animateshow\Portrait();
$portrait->play();


$portrait = new Image();
$portrait->play();


$portrait = new gallery\animateshow\Portrait();
// $portrait->play();

$portrait = new viewer\Picture();
$portrait->play();


?>