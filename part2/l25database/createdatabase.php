<?php

ini_set("display_errors",1);

 // => (i) MySQLI Procedural 

    // $conn = mysqli_connect("localhost","root","mydbserver2025","phpone");

    // if(mysqli_connect_error()){
    //     echo "Connection Failed" . mysqli_connect_eror();
    //     exit();
    // }else{
    //     echo "Connected Successfully";
    // }

    // $stmt = "CREATE DATABASE phpdbone";

    // if(mysqli_query($conn,$stmt)){
    //     echo "Database Create Successfully";
    // }else{
    //     echo "Error Found";
    // }


    // mysqli_close($conn);






    // // => (ii) MySQLI Object-Oriented 

    // $conn = new mysqli("localhost","root","mydbserver2025","phpone");

    // if($conn->connect_errno){
    //     // echo "Connection Failed" . $conn->connect_error;
    //     // exit();

    //     die("Connection Failed : " . $conn->connect_errno);

    // }else{
    //     echo "Connected Successfully <br/>";
    // }

    // $stmt = "CREATE DATABASE IF NOT EXISTS phpdbtwo";

    // if($conn->query($stmt)){
    //     echo "Database Create Successfully";
    // }else{
    //     echo "Error Found=". $conn->error;
    // }


    // $conn->close();




    // => (iii) PDO 

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "mydbserver2025";

    try{

        $conn = new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully <br/>";

        $stmt = "CREATE DATABASE IF NOT EXISTS phpdbthree";
        
        $conn->exec($stmt);

        echo "Database Created Successfully";

    }catch(PDOException $e){

        echo "Error Found : " . $e->getMessage();

    }




?>