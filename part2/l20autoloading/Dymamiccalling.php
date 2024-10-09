<?php

// require_once "Music.php";
// require_once "Video.php";
// require_once "gallery/Photo.php";


spl_autoload_register(function($classname){
    // echo "Loading the class = $classname <br/>";

    require_once "$classname.php";
});



$musicobj = new Music();
$musicobj->play();


$vidoobj = new Video();
$vidoobj->play();


// = can't call
// $photoobj = new Photo();
// $photoobj->play();

echo "<hr/>";


?>