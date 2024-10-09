<?php

//Class Object 
class Thiskeyword{

    // =>Access Modifier 
        // public = anyone can access
        // private = only access inside main calass
        // protected = subclass / Extened Class

    public $companyname = "Data Land Technology"; //can access from everywhere
    private $jobtitle = "Manager"; // can't access from outside
    protected $location = "Yangon"; // can't access from outside
    

    public function getinfo(){
        $num = 10;
        echo $num;

        echo $this->companyname;
        echo $this->jobtitle;
        echo $this->location;

    }

    public function getcompanyname(){
        echo $this->companyname; // Data Land Technology
        echo "<br/>";

        $this->companyname = "ABC Co.,Ltd";
        echo $this->companyname;//ABC Co.,Ltd

        $this->jobtitle= "Director";
        echo $this->jobtitle; // Director

        $this->location = "Mawlamyine";
        echo $this->location; // Mawlamyine

    }
    
    
}


class Vehicle {
    public $brand = "Toyota";

    public function getbrandname(){
       return $this->brand;
    }

    public function setbrandname($name){
        $this->brand = $name;

    }

}


$obj = new Thiskeyword();

echo "This is Access Modifier <br/>";

echo $obj->companyname . "<br/>";//Data Land Technology

$obj->getinfo();//10 Data Land Technology / Manager / Yangon
echo "<br/>";

$obj->getcompanyname();// Data Land Technology/ABC Co.,Ltd // Director // Mawlamyine

echo "<br/>";

echo $obj->companyname;// ABC Co.,Ltd
// echo $obj->jobtitle;//error
// echo $obj->location;//error

echo "<hr/>";

$obj2 = new Vehicle();

echo $obj2->brand."<br/>";
echo $obj2->getbrandname();
echo $obj2->setbrandname("Suzuki");
echo "<br/>";
echo $obj2->getbrandname();//Suzuki
echo "<br/>";
echo $obj2->setbrandname("Mazda");
echo "<br/>";
echo $obj2->getbrandname();//Mazda

echo "<hr/>";


?>


