<?php

ini_set("display_errors",1);

// mysqli 

$conn = mysqli_connect("localhost","root","mydbserver2025","lessontwo");

if(mysqli_connect_error()){
    echo "connection failed";
}else{
    echo "Connected Successfully <br/>";
}

if(isset($_POST["submit"])){

    $getname = textfilter($_POST['name']);
    $getemail = textfilter($_POST["email"]);
    $getpassword = textfilter($_POST["password"]);

    $stmt = "INSERT INTO users(name,email,password) VALUES(?,?,?)";
    $insertstmt = mysqli_prepare($conn,$stmt);
    mysqli_stmt_bind_param($insertstmt,"sss",$getname,$getemail,$getpassword);
    mysqli_stmt_execute($insertstmt);

    echo 'Inserted <br/>';

    mysqli_close($conn);
   
}

function textfilter($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register Form Revision</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style type="text/css">

            .container{
                width: 700px;
            }
            
        </style>
    </head>
    <body>

        <div class="container mt-5">

            <h2 class="text-center">Register Form</h2>

            <form action="" method="POST">

                <div class="form-group mt-5">

                    <label for="">Full Name</label>
                    <input type="text" name="name" class="form-control" />

                </div>

                <div class="form-group mt-5">

                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" />

                </div>

                <div class="form-group mt-5">

                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" />

                </div>

                <button type="submit" name="submit" class="btn btn-primary float-end mt-3">Sing Up</button>

            </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
