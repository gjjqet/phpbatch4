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

    // $stmt = "INSERT INTO students(firstname,lastname,city) VALUE('aung','kyaw','yangon')";

    // if(mysqli_query($conn,$stmt)){
    //     echo "Insert Successfully";
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

    // $stmt = "INSERT INTO students(firstname,lastname,city) VALUE('aung','kyaw','yangon'),('nu','nu','mandalay')";

    // if($conn->query($stmt)){
    //     echo "Insert Successfully";
    // }else{
    //     echo "Error Found";
    // }


    // mysqli_close($conn);





// => (iii) PDO 

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "mydbserver2025";
// $dbname = "phpdbthree";

// try{

//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "Connected Successfully <br/>";

//     $stmt = "INSERT INTO students(firstname,lastname,city) VALUE('aung','kyaw','yangon');";
//     $stmt .= "INSERT INTO students(firstname,lastname,city) VALUE('su','hlaing','yangon');";
//     $stmt .= "INSERT INTO students(firstname,lastname,city) VALUE('yamon','oo','yangon');";

//     $conn->exec($stmt);

//     echo "Insert Successfully <br/>";
    
// }catch(PDOException $e){

//     echo "Error Found : " . $e->getMessage();

// }




$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mydbserver2025";
$dbname = "phpdbthree";

try{

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully <br/>";


    $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE('yoon','yoon','yangon')");
    $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE('thoon','thoon','yangon')");
    $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE('mon','mon','yangon')");

    echo "Insert Successfully <br/>";
    
}catch(PDOException $e){

    echo "Error Found : " . $e->getMessage();

}






?>