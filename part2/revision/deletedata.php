<?php

// mysqli 

// $conn = mysqli_connect("localhost","root","mydbserver2025","dbone");

// if(mysqli_connect_error()){
//     echo "Connection Failed <br/>";
// }else{
//     echo "Connected <br/>";
// }

// $stmt = "DELETE FROM students WHERE id=1";

// if(mysqli_query($conn,$stmt)){
//     echo "Deleted data <br/>";
// }else{
//     echo "Fail to insert <br/>";
// }


// // mysqli 

// $conn = new mysqli("localhost","root","mydbserver2025","dbtwo");

// if($conn->connect_error){
//     echo "Connect Error <br/>";
// }else{
//     echo "Conn <br/>";
// }

// $stmt = "DELETE FROM students WHERE id=1";

// if($conn->query($stmt)){
//     echo "deleted";
// }else{
//     echo 'fail to insert';
// }



// // PDO

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "mydbserver2025";
// $dbname = "dbthree";

// try{

//     $conn = new PDO("mysql:dbhost=$dbhost;dbname=$dbname",$dbuser,$dbpass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//     echo "connected ";

//     $stmt = "DELETE FROM students WHERE id=1";

//     $conn->exec($stmt);

//     echo "delted";

// }catch(PDOException $e){
//     die("fail to connect");
// }

?>