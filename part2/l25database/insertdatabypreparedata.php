<?php

ini_set("display_errors",1);

// The arguments (4 types)
// i = integer 
// d = double 
// s = string 
// b = blob



// //  => (i) MySQLI Procedural 

//     $conn = mysqli_connect("localhost","root","mydbserver2025","phpdbone");

//     if(mysqli_connect_error()){
//         echo "Connection Failed" . mysqli_connect_eror();
//         exit();
//     }else{
//         echo "Connected Successfully <br/>";
//     }

//     $stmt = "INSERT INTO students(firstname,lastname,city) VALUE(?,?,?)";
//     $insertstmt = mysqli_prepare($conn,$stmt);
//     mysqli_stmt_bind_param($insertstmt,"sss",$firstname,$lastname,$city);

//     $firstname = "aung";
//     $lastname = "zaw";
//     $city = "bagan";

//     mysqli_execute($insertstmt);

//     echo "Insert Successfully";
    


//     mysqli_close($conn);





//  => (i) MySQLI Procedural 

// $conn = mysqli_connect("localhost","root","mydbserver2025","phpdbone");

// if(mysqli_connect_error()){
//     echo "Connection Failed" . mysqli_connect_eror();
//     exit();
// }else{
//     echo "Connected Successfully <br/>";
// }

// $stmt = "INSERT INTO students(firstname,lastname,city) VALUES(?,?,?)";
// $insertstmt = mysqli_prepare($conn,$stmt);
// mysqli_stmt_bind_param($insertstmt,"sss",$firstname,$lastname,$city);

// $firstname = "su";
// $lastname = "su";
// $city = "bago";
// mysqli_execute($insertstmt);

// $firstname = "zaw";
// $lastname = "zaw";
// $city = "yangon";
// mysqli_execute($insertstmt);

// $firstname = "hnin";
// $lastname = "hnin";
// $city = "mawlamyine";
// mysqli_execute($insertstmt);

// echo "Insert Successfully";


// mysqli_stmt_close($stmt);
// mysqli_close($conn);








    // => (ii) MySQLI Object-Oriented 

//     $conn = new mysqli("localhost","root","mydbserver2025","phpdbtwo");

//     if(mysqli_connect_error()){
//         echo "Connection Failed" . mysqli_connect_eror();
//         exit();
//     }else{
//         echo "Connected Successfully <br/>";
//     }

//     $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUE(?,?,?)");
//     $stmt->bind_param("sss",$firstname,$lastname,$city);


//     $firstname = "su";
//     $lastname = "su";
//     $city = "bago";
//     $stmt->execute();

//     $firstname = "zaw";
//     $lastname = "zaw";
//     $city = "yangon";
//     $stmt->execute();

//     $firstname = "hnin";
//     $lastname = "hnin";
//     $city = "mawlamyine";
//     $stmt->execute();

//    echo "Insert Successfully";

//     $stmt->close();
//     mysqli_close($conn);





// => (iii) PDO 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mydbserver2025";
$dbname = "phpdbthree";

try{

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully <br/>";

    $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUES(:firstname,:lastname,:city)");
    $stmt->bindParam("firstname",$firstname);
    $stmt->bindParam("lastname",$lastname);
    $stmt->bindParam("city",$city);
    
    $firstname = "su";
    $lastname = "su";
    $city = "bago";
    $stmt->execute();

    $firstname = "zaw";
    $lastname = "zaw";
    $city = "yangon";
    $stmt->execute();

    $firstname = "hnin";
    $lastname = "hnin";
    $city = "mawlamyine";
    $stmt->execute();

   echo "Insert Successfully";

    

}catch(PDOException $e){

    echo "Error Found : " . $e->getMessage();

}

$conn = null;




?>