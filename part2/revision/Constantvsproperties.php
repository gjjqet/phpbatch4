<?php

class Constantvsproperties{
    const ARTICLE = "This is new article for SPORT";
    const TOPIC = "This is new topic for SPORT";

    public $post = "This is new post for SPORT";

    public function sport(){
        echo self::ARTICLE . "<br/>";
        echo static::TOPIC . "<br/>";
        echo $this->post;
    }
}

class Baby1 extends Constantvsproperties{

    const ARTICLE = "This is new article for POLITICAL";
    const TOPIC = "This is new topic for POLITICAL";

    public $post = "This is new post for POLITICAL";

    public function pol(){
        echo self::ARTICLE . "<br/>";
        echo static::TOPIC . "<br/>";
        echo $this->post;
    }


}

$obj = new Constantvsproperties;
$obj->sport();

echo "<hr/>";
echo '<hr/>';

$baby1= new Baby1();
$baby1->sport();

echo "<hr/>";

$baby1->pol();

?>