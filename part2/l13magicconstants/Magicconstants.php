<?php


class Magicconstants{

    public function getclassname1(){
        echo __CLASS__ . "<br/>";
    }

    public function getclassname2(){
        echo get_class($this) . "<br/>";
    }

    public function getfunname1(){
        echo __FUNCTION__ . "<br/>";
    }

    public static function getfunname2(){
        echo __FUNCTION__ . "<br/>";
    }

    public function getmthname1(){
        echo __METHOD__ . "<br/>";
    }

    public static function getmthname2(){
        echo __METHOD__ . "<br/>";
    }

    public function getdir(){
        echo __DIR__ . "<br/>";
    }

    public function getfile(){
        echo __FILE__ . "<br/>";
    }

    public function getline(){
        echo __LINE__ . "<br/>";
    }

}

trait Mytrait{
    public $email = "honey@gmail.com";
    public $password = "123456";
    
    public function gettrait(){
        echo __TRAIT__."<br/>";
    }
}

class Authlogin{

    use Mytrait;    

    public function login(){
        echo "this is user login.  Email is $this->email & Password is $this->password.<br/>";
    }

}

echo "This is Magic Constants <br/>";

$obj = new Magicconstants();

$obj->getclassname1();
$obj->getclassname2();

$obj->getfunname1();
$obj->getfunname2();

$obj->getmthname1();
$obj->getmthname2();

$obj->getdir(); // /var/www/html/phpbatch4/part2/l13magicmethods   (working directory - folder path)
$obj->getfile(); // /var/www/html/phpbatch4/part2/l13magicmethods/Magicconstants.php  (working directory - file path)
$obj->getline(); //39

echo "<hr/>";

$obj2 = new Authlogin();
$obj2->login(); // this is user login. Email is honey@gmail.com & Password is 123456.
$obj2->gettrait();// Mytrait

echo "<hr/>";



?>