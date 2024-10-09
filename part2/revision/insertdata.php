<?php

// mysqli 

// $conn = mysqli_connect("localhost","root","mydbserver2025","dbone");

// if(mysqli_connect_error()){
//     echo "Connection Failed <br/>";
// }else{
//     echo "Connected <br/>";
// }

// $stmt = "INSERT INTO students(firstname,lastname,city) VALUE('aung','kyaw','mandalay')";

// if(mysqli_query($conn,$stmt)){
//     echo "Inserted data <br/>";
// }else{
//     echo "Fail to insert <br/>";
// }


// mysqli 

// $conn = new mysqli("localhost","root","mydbserver2025","dbtwo");

// if($conn->connect_error){
//     echo "Connect Error <br/>";
// }else{
//     echo "Conn <br/>";
// }

// $stmt = "INSERT INTO students(firstname,lastname,city) VALUE('su','myat','yangon')";

// if($conn->query($stmt)){
//     echo "inserted";
// }else{
//     echo 'fail to insert';
// }



// PDO

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mydbserver2025";
$dbname = "dbthree";

try{

    $conn = new PDO("mysql:dbhost=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "connected ";

    $stmt = "INSERT INTO students(firstname,lastname,city) VALUE('maung','mya','bago')";

    $conn->exec($stmt);

    echo "inserted";

}catch(PDOException $e){
    die("fail to connect");
}

?>