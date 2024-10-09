<?php

ini_set("display_errors",1);

// => (i) MySqLi Procedural 

    // => DB Connect 
    // mysqli_connect(servername,dbusername,dbpassword,dbname);

    //$conn = mysqli_connect("localhost","root","mydbserver2025","phpone")




// => (ii) MySQLI Object-Oriented 
           
        // new mysqli(severname,dbusername,dbpassword,dbname)
        // $conn = new mysqli("localhost","root","mydbserver2025","phpone");




// => (iii) PDO (PHP Data Objects)

    // new PDO("mysql:host=host;dbname=dbname",dbusername,dbpassword);

    // $conn = new PDO("mysql:host=localhost;dbname=phpone","root","mydbserver2025");
    // $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    // => Method 1

    // $dbhost = "localhost";
    // $dbuser = "root";
    // $dbpass = "mydatabasep@ssw0rd2022A";
    // $dbname = "phpone";

    // $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    // $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



    // => Method 2 

            // (Set DSN = Data Source Name)
    // $options = [PDO::ATTR_PERSISTENT=>true,PDO::ATTR_ERRMODE=>ERRMODE_EXCEPTION];
    // $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass,$options);





    // Exercise

    // => (i) MySQLI Procedural ,  mysqli_close($conn)

     // $conn = mysqli_connect("localhost","root","mydbserver2025","phpone");

    // if(mysqli_connect_error()){
    //     echo "Connection Failed " . mysqli_connect_error();
    //     exit();
    //  
    //      die("Connection Failed". mysqli_connect_eror())
    // }else{
    //     echo "Connected Successfully.";
    // }
    


    // $conn = mysqli_connect("localhost","root","mydbserver2025","phpone");

    // if(!$conn){
    //     echo "Connection Failed " . mysqli_connect_error();
    //     exit();
    //  
    //      die("Connection Failed". mysqli_connect_eror())
    // }else{
    //     echo "Connected Successfully.";
    // }




    // => (ii) MySQLI Object-Oriented  ,  $conn->cose()      

        $conn = new mysqli("localhost","root","mydbserver2025","phpone");

        if($conn->connect_error){

            // echo "Connection Failed " . $conn->connect_error;
            // exit();

            die("Connection Failed" . $conn->connect_error);

        }else{
            echo "Connected Successfully";
        }


        // if($conn->connect_errorno){

        //     // echo "Connection Failed " . $conn->connect_errorno;
        //     // exit();

        //     die("Connection Failed" . $conn->connect_errorno);

        // }else{
        //     echo "Connected Successfully";
        // }






    // => (iii) PDO (PHP Data Objects) ,    $conn->close()

    // $dbhost = "localhost";
    // $dbuser = "root";
    // $dbpass = "mydbserver2025";
    // $dbname = "phpone";


    // try{

    //     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //     echo 'Connected Successfully';

    // }catch(PDOException $e){

    //     // $this->error = $e->getMessage();

    //     die("Connection Failed " . $e->getMessage());

    // }




?>