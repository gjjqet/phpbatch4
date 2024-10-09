<?php

ini_set("display_errors",1);

//  => (i) MySQLI Procedural 

    // $conn = mysqli_connect("localhost","root","mydbserver2025","phpdbone");

    // if(mysqli_connect_error()){
    //     echo "Connection Failed" . mysqli_connect_eror();
    //     exit();
    // }else{
    //     echo "Connected Successfully <br/>";
    // }

    // $stmt = "UPDATE students SET lastname='zaw' WHERE id=1";

    // if(mysqli_query($conn,$stmt)){
    //     echo "Update Successfully";
    // }else{
    //     echo "Error Found";
    // }


    // mysqli_close($conn);






    // => (ii) MySQLI Object-Oriented 

    // $conn = new mysqli("localhost","root","mydbserver2025","phpdbtwo");

    // if(mysqli_connect_error()){
    //     echo "Connection Failed" . mysqli_connect_eror();
    //     exit();
    // }else{
    //     echo "Connected Successfully <br/>";
    // }

    // $stmt = "UPDATE students SET lastname='moe' WHERE id=1";

    // if($conn->query($stmt)){
    //     echo "Update Successfully";
    // }else{
    //     echo "Error Found";
    // }


    // mysqli_close($conn);





// => (iii) PDO 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mydbserver2025";
$dbname = "phpdbthree";

try{

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully <br/>";

    $stmt = "UPDATE students SET city='Mandalay' WHERE id=6";
    
    $conn->exec($stmt);

    echo "Update Successfully <br/>";
    
}catch(PDOException $e){

    echo "Error Found : " . $e->getMessage();

}









?>