<?php

// Note :: final keywork is used for restrict method overite and class not to be share with child class
class Myfinalkeyword{

    public $fullname = "Aung Kyaw Kyaw";
    public $city = "Mandalay";
    public $email = "aungkyawkyaw@gmail.com";
    public $password = "98765";

    public function getaccess(){
         echo "This is site login : email is $this->email & password is $this->password . <br/> ";
    }

    final public function getinfo(){
         echo "Name is $this->fullname & city is $this->city . <br/> ";
    }

}

class Developerlogin extends Myfinalkeyword{
    public function gitlabligin(){
        echo "This is gitlab login : email is $this->email & Profile is $this->fullname . <br/> ";
   }

//    public function getinfo(){
//     echo "My full name is $this->fullname & Current city is $this->city . <br/> ";
//   }

}

echo "This is final keyword <br/> ";

$obj1 = new Myfinalkeyword();
echo $obj1->fullname . "<br/>";
$obj1->getaccess();
$obj1->getinfo();

echo "<hr/>";

$obj2 = new Developerlogin();
echo $obj2->fullname . "<br/>";
$obj2->getaccess();
$obj2->getinfo();

?>