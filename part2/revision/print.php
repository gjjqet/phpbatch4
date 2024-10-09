<?php

// Mysqli Procedual 

// $conn = mysqli_connect("localhost","root","mydbserver2025","lessontwo");

// if(mysqli_connect_error()){
//     echo 'connection failed <br/>';
// }else{
//     echo 'Connected';
// }


// Mysqli Oriented 

// $conn = new mysqli('localhost',"root","mydbserver2025","lessontwo");

// if($conn->mysqli_connect){
//     echo 'Connection Failed ' . $conn->mysqli_connect;
// }else{
//     echo 'Connected Successfully <br/>';
// }


// PDO

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mydbserver2025";
$dbname = "lessontwo";

try{

    $conn = new PDO("mysql:dbhost=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo 'Conn <br/>';

}catch(PDOException $e){
    echo "Connection Failed " . $e->getMessage();
}


?>