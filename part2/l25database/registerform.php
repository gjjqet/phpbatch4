<?php

ini_set("display_errors",1);

// if(isset($_POST["submit"])){
//     echo "Form submitted";
// }

if(isset($_POST["submit"])){
    // echo "Form submitted";

    $getname = textfilter($_POST["name"]);
    $getemail = textfilter($_POST["email"]);
    $getpassword = textfilter($_POST["password"]);

    // echo $getname;
    // echo $getemail;
    // echo $getpassword;

    // => MySQLi Prceodural

    // DB Connect

    $conn = mysqli_connect("localhost","root","mydbserver2025","phpone");

    if($conn->connect_error){
        echo "Connection Failed". $conn->connect_error;
        exit();
    }else{
        echo "Connection Successfully";
    }

    // Data Insert 

        // 1. db connect
        // 2. query 
        // 3. prepare (encrypt)
        // 4. bind_param(decrypt)
        // 5. execute 
        // 6.close



    $stmt = "INSERT INTO users(name,email,password) VALUE(?,?,?)";
    $insertstmt = mysqli_prepare($conn,$stmt);
    mysqli_stmt_bind_param($insertstmt,"sss",$getname,$getemail,$getpassword);
    mysqli_stmt_execute($insertstmt);

    echo "New User Create Successfully";

    mysqli_close($conn);

}


function textfilter($data){

    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>

         <!--1 css 1js bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <!-- 1css 1js  bootstrap -->
     
    </head>
    <body>

        <div class="container">

            <div class="col-md-6 mx-auto">
                <h3 class="text-center my-3">Register Form</h3>

                <form action="" method="POST">

                    <div class="form-group mb-3">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Sign Up" />

                </form>

            </div>

        </div>

        <!--1 css 1js bootstrap -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- 1css 1js  bootstrap -->
    </body>
</html>

<!-- 
CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(20),
    email VARCHAR(20),
    password VARCHAR(225)
); -->