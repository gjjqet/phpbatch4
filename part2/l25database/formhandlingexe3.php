<?php

$name = $email = $password = $city = $favcolor = $bio = "";
$nameerr = $emailerr = $passworderr = $cityerr = $favcolorerr = $bioerr = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(empty($_POST["name"])){
        $nameerr = "Name is required";
    }else{
        $name = textfilter($_POST["name"]);
    }

    if(empty($_POST["email"])){
        $emailerr = "Email is required";
    }else{
        $email = textfilter($_POST["email"]);
    }

    if(empty($_POST["password"])){
        $passworderr = "Password is required";
    }else{
        $password = textfilter($_POST["password"]);
    }


    if(empty($_POST["city"])){
        $cityerr = "City is required";
    }else{
        $city = textfilter($_POST["city"]);
    }

    if(empty($_POST["facolor"])){
        $favcolorerr = "Fav Color is required";
    }else{
        $favcolor =textfilter($_POST["favcolor"]);
    }

    if(empty($_POST["bio"])){
        $bioerr = "Bio is required";
    }else{
        $bio =textfilter($_POST["bio"]);

    }
    
}


function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);

    return $data;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Handling Exercise3</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <style type="text/css">
            .error{
                color:red;
            }
        </style>
    </head>
    <body>

        <div class="container mt-5">

           
            <form action=" <?php $_SERVER['PHP_SELF'] ?> " method="POST">

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <span class="error">* <?php echo $nameerr; ?></span>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <span class="error">* <?php echo $emailerr; ?></span>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <span class="error">* <?php echo $passworderr; ?></span>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="city">City</label>
                    <span class="error">* <?php echo $cityerr; ?></span>
                    <input type="text" name="city" id="city" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="">Fav Color</label>
                    <span class="error">* <?php echo $favcolorerr; ?></span>
                    <input type="radio" name="favcolor" id="favrd" class="form-check-input" value="Red Color" /><label for="favrd">Red</label>
                    <input type="radio" name="favcolor" id="favgn" class="form-check-input " value="Green Color" /><label for="favgn">Green</label>
                    <input type="radio" name="favcolor" id="favbl" class="form-check-input" value="Blue Color" /><label for="favbl">Blue</label>
                </div>

                <div class="form-group mb-3">
                    <label for="bio">Bio</label>
                    <span class="error">* <?php echo $bioerr; ?></span>
                    <textarea name="bio" id="bio" class="form-control" rows="5"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>
        
    </body>
</html>

<?php

echo "<h2>My Information Are...</h2>";
echo "Name is $name <br/>";
echo "Email is $email <br/>";
echo "Password is $password <br/>";
echo "City is $city <br/>";
echo "Fav color is $favcolor <br/>";
echo "Bio is $bio <br/>";
echo $_SERVER['PHP_SELF'];




?>