<?php

//Parent Class / Main Class / Super Class

// Note :: define() not working in class method

class Myinheritance{

     //Properties / Member Properties

     public $fullname = "Sandar";
     public $city = "Yangon";
     public $email = "sandar@gmail.com";
     public $password = "123456";

     //Methods // Member Methods
     public function getaccess(){
          echo "This is site login : email is $this->email & password is $this->password . <br/> ";
     }

     public function getinfo(){
          echo "Name is $this->fullname & city is $this->city . <br/> ";
     }
   
}

//Child Class
class Devlogin extends Myinheritance{
     
     //Member Method (or) Own Method
     public function githublogin(){
          echo "This is github login : email is $this->email & Profile name is $this->fullname . <br/> ";
     }
     
}

class Sociallogin extends Myinheritance{

     public function gmaillogin(){

          echo "This is githublogin : email is $this->email & Profile name is $this->fullname . <br/> ";

     }

     public function facebooklogin(){

          echo "This is facebooklogin  : email is $this->email & Profile name is $this->fullname . <br/> ";

     }

     public function getinfo(){

          //Properties overwriting
          $this->fullname = "Hsu Myat Yandar Hlaing wint Kyaw Tun";
          $this->city = "Bago";

          echo "Name is $this->fullname & City is $this->city . <br/>";
     }

}


class Locallogin extends Sociallogin{
     
     public function sitelogin(){

          echo "This is sitelogin : email is $this->email & Profile name is $this->fullname . <br/> ";

     }
}



echo "This is Inheritance <br/>";

$obj = new Myinheritance();
echo $obj->fullname . "<br/>";
$obj->getaccess();
$obj->getinfo();

echo "<hr/>";

$devobj = new Devlogin();
echo $devobj->fullname . "<br/>";
$devobj -> getaccess();
$devobj->getinfo();
$devobj->githublogin();

echo "<hr/>";

$solobj = new Sociallogin;
echo $devobj->fullname."<br/>";
$solobj->getaccess();
$solobj->getinfo();

// $solobj->githublogin();//error

$solobj->gmaillogin();
$solobj->facebooklogin();

$solobj->getinfo();

echo "<hr/>";

$locobj = new Locallogin();
echo $locobj->fullname . "<br/>";
$locobj->sitelogin();

echo "<hr/>";


?>