<?php

interface Greeting{
    public function speak();
}

class Myanmar implements Greeting{
    public function speak(){
        echo "Mingalarpar <br/>";
    }
}


class Thailand implements Greeting{
    public function speak(){
        echo "Sawsadi <br/>";
    }
}


class English implements Greeting{
    public function speak(){
        echo "Hello <br/>";
    }
}

function results($objects){
    foreach($objects as $object){
        echo $object->speak();
    }
}

echo "This is Polymorphism Concert with interface<br/>";

$datas = [
    new Myanmar(),
    new Thailand(),
    new English()
];

results($datas);

echo "<hr/>";


?>