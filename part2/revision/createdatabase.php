<?php

ini_set("display_errors",1);

// mysqli 

// $conn = mysqli_connect("localhost","root","mydbserver2025","lessontwo");

// if(mysqli_connect_error()){
//     echo "Connection Failed <br/>";
// }else{
//     echo "Connected ";
// }


// $stmt = "CREATE DATABASE IF NOT EXISTS dbone";

// if(mysqli_query($conn,$stmt)){
//     echo "created database <br/>";
// }else{
//     echo "fail to database <br/>";
// }


// mysqli 

// $conn = new mysqli('localhost',"root","mydbserver2025");

// if($conn->mysqli_error){
//     echo "Connection error";
// }else{
//     echo "Conn <br/>";
// }

// $stmt = "CREATE DATABASE IF NOT EXISTS dbtwo";

// if($conn->query($stmt)){
//     echo "Created <br/>";
// }else{
//     echo 'Failed';
// }


// PDO 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mydbserver2025";

try{

    $conn = new PDO("mysql:dbhost=$dbhost",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo 'Connected Successfully <br/>';

    $stmt = "CREATE DATABASE IF NOT EXISTS dbthree";

    $conn->exec($stmt);

    echo "Created <br/>";

}catch(PDOException $e){
    echo "Failed".$e->getMessage();
}


?>