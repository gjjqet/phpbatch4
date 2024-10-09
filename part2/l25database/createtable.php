<?php

ini_set("display_errors",1);

 // => (i) MySQLI Procedural 

    // $conn = mysqli_connect("localhost","root","mydbserver2025","phpdbone");

    // if(mysqli_connect_error()){
    //     echo "Connection Failed" . mysqli_connect_eror();
    //     exit();
    // }else{
    //     echo "Connected Successfully <br/>";
    // }

    // $stmt = "CREATE TABLE IF NOT EXISTS students(

    //         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //         firstname VARCHAR(30) NOT NULL,
    //         lastname VARCHAR(30) NOT NULL,
    //         city VARCHAR(30),
    //         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    //         update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";

    // if(mysqli_query($conn,$stmt)){
    //     echo "Table Create Successfully";
    // }else{
    //     echo "Error Found";
    // }


    // mysqli_close($conn);






    // // => (ii) MySQLI Object-Oriented 

    // $conn = new mysqli("localhost","root","mydbserver2025","phpdbtwo");

    // if(mysqli_connect_error()){
    //     echo "Connection Failed" . mysqli_connect_eror();
    //     exit();
    // }else{
    //     echo "Connected Successfully <br/>";
    // }

    // $stmt = "CREATE TABLE IF NOT EXISTS students(

    //         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //         firstname VARCHAR(30) NOT NULL,
    //         lastname VARCHAR(30) NOT NULL,
    //         city VARCHAR(30),
    //         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    //         update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";

    // if($conn->query($stmt)){
    //     echo "Table Create Successfully";
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

        $stmt = "CREATE TABLE IF NOT EXISTS students(
    
                id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                firstname VARCHAR(30),
                lastname VARCHAR(30),
                city VARCHAR(30),
                created_at TIMESTAMP DEFAULT NOW(),
                updated_at TIMESTAMP DEFAULT NOW() ON UPDATE NOW()
            )";    
         
         $conn->exec($stmt);

         echo "Table Created Successfully";

    }catch(PDOException $e){

        echo "Error Found : " . $e->getMessage();

    }





?>