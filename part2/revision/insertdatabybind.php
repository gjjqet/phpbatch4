<?php

ini_set("display_errors",1);

// mysqli 

// $conn = mysqli_connect("localhost","root","mydbserver2025","dbone");

// if(mysqli_connect_error()){
//     echo "Connection Failed <br/>";
// }else{
//     echo "Connected <br/>";
// }

// $stmt = "INSERT INTO students(firstname,lastname,city) VALUES(?,?,?)";
// $insertstmt = mysqli_prepare($conn,$stmt);
// mysqli_stmt_bind_param($insertstmt,"sss",$firstname,$lastname,$city);

// $firstname = "kyaw";
// $lastname = "kyaw";
// $city = "yangon";

// mysqli_stmt_execute($insertstmt);

// echo "inserted";

// mysqli_close($conn);


// // mysqli 

// $conn = new mysqli("localhost","root","mydbserver2025","dbtwo");

// if($conn->connect_error){
//     echo "Connect Error <br/>";
// }else{
//     echo "Conn <br/>";
// }


// $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUES(?,?,?)");
// $stmt->bind_param("sss",$firstname,$lastname,$city);

// $firstname = "su";
// $lastname = "myat";
// $city = "bago";
// $stmt->execute();

// $firstname = "nu";
// $lastname = "nu";
// $city = "pyi";
// $stmt->execute();

// echo 'inserted by bind';



// PDO

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mydbserver2025";
$dbname = "dbthree";

try{

    $conn = new PDO("mysql:dbhost=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "connected ";

    $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUE(:firstname,:lastname,:city)");
    $stmt->bindParam(":firstname",$firstname);
    $stmt->bindParam(":lastname",$lastname);
    $stmt->bindParam(":city",$city);

    $firstname = "myat";
    $lastname = "kyaw";
    $city = "mandalay";
    $stmt->execute();

    $firstname = "myat";
    $lastname = "thu";
    $city = "yangon";
    $stmt->execute();

    echo "inserted by";


}catch(PDOException $e){
    die("fail to connect");
}

?>
