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
$obj->gmaillogin();//This is Gmail login . Email is .honey@gmail.com & Password is 123456
echo $obj->fullname . "<br/>"; // Honey Nway Oo
echo $obj->email . "<br/>"; // honey@gmail.com
echo $obj->password . "<br/>"; // 123456
$obj->useraccess(); //This is site login . Email is .honey@gmail.com & Password is 123456 .
$obj->userinfo(); // Profile is Honey Nway Oo .

$obj->githublogin(); // This is githublogin . Email is .honey@gmail.com & Password is 123456 .


// $ggo = new Googleauth(); 
// $ggo->gmaillogin(); //This is Gmail login . Email is & Profile name is 



echo "<hr/>";

?>