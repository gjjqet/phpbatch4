<?php

interface Role{
    public function setid($id);
    public function createrole();
    public function readrole($id);
    public function updaterole($id,$request);
    public function deleterole();
}

class Ourinterface implements Role{

    public $id;
    public $request;

    public function setid($id){
        $this->id = $id;
    }

    public function createrole(){
        echo "i am from create role <br/>";
    }

    public function readrole($id){
        $this->id = $id;
        echo "i am from read role and i have to read record id = {$this->id} <br/>";
    }

    public function updaterole($id,$request){
        $this->id = $id;
        $this->request = $request;
        echo "i am from read role and i have to update record id = {$this->id} . And my request data is = {$this->request} <br/>";
    }

    public function deleterole(){

        echo "i am from delete role and i have to read record id = {$this->id} <br/>";
    }

}

$obj = new Ourinterface();

$obj->setid(500);
$obj->createrole();  //i am from create role
$obj->readrole(10); //i am from read role and i have to read record id = 10
$obj->updaterole(12,"aung aung"); // i am from read role and i have to update record id = 12 . And my request data is = aung aung
$obj->deleterole(); //i am from delete role and i have to read record id = 12

echo "<hr/>";

?>