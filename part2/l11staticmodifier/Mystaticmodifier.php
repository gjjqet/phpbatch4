<?php


class Mystaticmodifier{

    //Static Property
    public static $account = 0;

    //Non-static Property
    public $idx = 0;

    public function getvalue(){
        self::$account++;
        echo self::$account . "<br/>";

        $this->idx++;
        echo $this->idx . "<br/>";

    } 

    public function getresult(){
        static::$account++;
        echo static::$account . "<br/>";

        $this->idx++;
        echo $this->idx . "<br/>";

    } 
    
}


class Baby1 extends Mystaticmodifier{

}

class Baby2 extends Mystaticmodifier{

    public function getmore(){
        static::$account++;
        echo static::$account . "<br/>";

        $this->idx++;
        echo $this->idx . "<br/>";

    } 

}


echo "This is Mystaticmodifier <br/>";

$obj1 = new Mystaticmodifier();
echo $obj1::$account;
echo "<br/>";
echo $obj1->idx;
echo "<br/>";

$obj1->getvalue();// 1 1
$obj1->getvalue();//2 2
$obj1->getvalue();//3 3
$obj1->getvalue();//4 4


$obj1->getresult();//5 5
$obj1->getresult();// 6 6
$obj1->getresult();// 7 7
$obj1->getresult();// 8 8

echo "<hr/>";

$obj2 = new Mystaticmodifier();

$obj2->getvalue();//9 1
$obj2->getvalue();//10 2
$obj2->getvalue();//11 3
$obj2->getvalue();//12 4

$obj2->getresult();//13 5
$obj2->getresult();//14 6
$obj2->getresult();//15 7
$obj2->getresult();//16 8


echo "<hr/>";

$obj3 = new Baby1();

$obj3->getvalue();//17 1
$obj3->getvalue();//18 2
$obj3->getvalue();//19 3
$obj3->getvalue();//20 4

$obj3->getresult();//21 4
$obj3->getresult();//22 5
$obj3->getresult();//23 6
$obj3->getresult();//24 7

echo "<hr/>";

$obj4 = new Baby2();

$obj4->getmore();//25 9
$obj4->getmore();//26 10
$obj4->getmore();//27 11
$obj4->getmore();//28 12

echo "<hr/>";

?>