<?php

ini_set("display_errors",1);
//mysqli 
// $conn = mysqli_connect("localhost","root","mydbserver2025","dbone");

// if(mysqli_connect_error()){
//     echo "Error";
// }else{
//     echo 'Succ <br/>';
// }

// $stmt = "CREATE TABLE IF NOT EXISTS students(
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30),
//     lastname VARCHAR(30),
//     city VARCHAR(60)
// );";

// if(mysqli_query($conn,$stmt)){
//     echo 'Table';
// }else{
//     echo "Failed";
// }


// mysqli 

// $conn = new mysqli("localhost","root","mydbserver2025","dbtwo");

// if($conn->connect_error){
//     echo "Failed";
// }else{
//     echo "Conn";
// }

// $stmt = "CREATE TABLE IF NOT EXISTS students(
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30),
//     lastname VARCHAR(30),
//     city VARCHAR(60)
// )";

// if($conn->query($stmt)){
//     echo 'Created a table';
// }else{
//     echo 'Failed to create';
// }



// PDO 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mydbserver2025";
$dbname = "dbthree";

try{

    $conn = new PDO("mysql:dbhost=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo 'Cs<br/>';

    $stmt = "CREATE TABLE IF NOT EXISTS students(
     id INT AUTO_INCREMENT PRIMARY KEY,
     firstname VARCHAR(30),
     lastname VARCHAR(30),
     city VARCHAR(60)
    )";

    $conn->exec($stmt);

    echo "Created table";

}catch(PDOException $e){
    die("fail to conect" . $e->getMessage());
}

?>