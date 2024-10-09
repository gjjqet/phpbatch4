<?php

ini_set("display_errors",1);


require_once("./Customload.php");

use gallery\slideshow\Image; // Method 2
use gallery\slideshow as viewer;; // Mehod 2

Customload::loader("Music");
$musicobj = new Music();
$musicobj->play();

Customload::loader("Video");
$vidoobj = new Video();
$vidoobj->play();

Customload::loader("gallery\Photo");
$photoobj = new gallery\Photo();
$photoobj->play();

Customload::loader("gallery\animateshow\Portrait");
$portrait = new gallery\animateshow\Portrait();
$portrait->play();

Customload::loader("gallery\slideshow\Image");
$portrait = new Image();
$portrait->play();


Customload::loader("gallery\slideshow\Picture");
$portrait = new viewer\Picture();
$portrait->play();


?>