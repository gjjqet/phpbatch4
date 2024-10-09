<?php

$name = $email = $password = $city = $favcolor = $bio = "";
$namereq = $emailreq = $passwordreq = $cityreq = $favcolorreq = $bioreq = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(empty($_POST['name'])){
        $namereq = "Name is required";
    }else{
        $name = textfilter($_POST["name"]);
    }

    if(empty($_POST['email'])){
        $emailreq = "Email is required";
    }else{
        $email = textfilter($_POST["email"]);
    }

  
    if(empty($_POST["password"])){
        $passwordreq = "Password is required";
    }else{
        $password = textfilter($_POST["password"]);
    }

    if(empty($_POST["city"])){
        $cityreq = "City is required";
    }else{
        $city = textfilter($_POST["city"]);
    }
    
    if(empty($_POST['favcol'])){
        $favcolorreq = "Color is required";
    }else{
        $favcolor = textfilter($_POST["favcol"]);
    }
    
   if(empty($_POST["bio"])){
        $bioreq = "Bio is required";
   }else{
    $bio = textfilter($_POST["bio"]);
   }
    
    

    // echo $name,$email,$password,$city,$favcolor,$bio;

}

function textfilter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Form Handling Revision</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style type="text/css">
            span{
                color:red;
            }
        </style>
    </head>
    <body>

        <div class="container mt-5">

            <form action="" method="POST">

                <div class="form-group mt-4">
                    <label for="">Name <span>*<?php echo $namereq ?></span></label>
                    <input type="text" name="name" class="form-control" />
                </div>

                <div class="form-group mt-4">
                    <label for="">Email <span>*<?php echo $emailreq ?></span></label>
                    <input type="email" name="email" class="form-control" />
                </div>

                <div class="form-group mt-4">
                    <label for="">Password <span>*<?php echo $passwordreq ?></span></label>
                    <input type="password" name="password" class="form-control" />
                </div>

                <div class="form-group mt-4">
                    <label for="">City <span>*<?php echo $cityreq ?></span></label>
                    <input type="password" name="city" class="form-control" />
                </div>

                <div class="form-group mt-4">
                    <label for="" class="d-block">Fav color <span>*<?php echo $favcolorreq ?></span></label>
                    <input type="radio" name="favcol" id="red" class="form-check-input" value="red color" /><label for="red" class="ms-2">Red</label>
                    <input type="radio" name="favcol" id="green" class="form-check-input" value="green color" /><label for="green" class="ms-2">Green</label>
                    <input type="radio" name="favcol" id="blue" class="form-check-input" value="blue color" /><label for="blue" class="ms-2">Blue</label>
                </div>
            
                <div class="form-group mt-4">
                    <label for="">Bio <span>*<?php echo $bioreq ?></span></label>
                    <textarea name="bio" name="bio" class="form-control" rows="5"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>

            </form>

        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

<?php

echo "<h2>My Information Are</h2>";
echo "My name is $name <br/>";
echo "Email is $email <br/>";
echo "Password is $password <br/>";
echo "City is $city <br/>";
echo "Fav color is $favcolor <br/>";
echo "Bio is $bio <br/>";
echo $_SERVER["PHP_SELF"];
?>