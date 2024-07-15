<?php

trait Sitelogin{

     public $fullname = "Honey Nway Oo";
     public $email = "honey@gmail.com";
     public $password = "123456";

     public function useraccess(){
          echo "This is site login . Email is .$this->email & Password is $this->password . <br/> ";
     }

     public function userinfo(){
          echo "Profile is $this->fullname . <br/>";
     }

}

trait Devlogin{

     public function githublogin(){
          echo "This is githublogin .  Email is .$this->email & Password is $this->password . <br/>";
     }

}

class Googleauth{

     //Method 3 
     use Sitelogin,Devlogin;

     public function gmaillogin(){
          echo "This is Gmail login .  Email is .$this->email & Password is $this->password <br/>";
     }
}

trait Mastertrait{
     use Sitelogin,Devlogin;
}

class Mytrait extends Googleauth{

     //Method 1
     //use Sitelogin;
     //use Devlogin;

     //Method 2
     // use Sitelogin,Devlogin;

     //Method 4
     // use Mastertrait
 
}

echo "This is Destructor <br/>";


$obj = new Mytrait();
$obj->gmaillogin();//This is Gmail login . Email is aungaung@gmail.com & Profile name is aung aung
echo $obj->fullname . "<br/>";
echo $obj->email . "<br/>";
echo $obj->password . "<br/>";
$obj->useraccess();
$obj->userinfo();

$obj->githublogin();


// $ggo = new Googleauth(); 
// $ggo->gmaillogin(); //This is Gmail login . Email is & Profile name is 



echo "<hr/>";

?>