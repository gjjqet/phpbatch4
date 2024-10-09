<?php

$name = $email = $password = $city = $favcolor = $bio = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $name = textfilter($_POST["name"]);
    $email = textfilter($_POST["email"]);
    $password = textfilter($_POST["password"]);
    $city = textfilter($_POST["city"]);
    $favcolor = textfilter($_POST["favcol"]);
    $bio = textfilter($_POST["bio"]);

    echo $name,$email,$password,$city,$favcolor,$bio;

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
    </head>
    <body>

        <div class="container mt-5">

            <form action="" method="POST">

                <div class="form-group mt-4">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" />
                </div>

                <div class="form-group mt-4">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" />
                </div>

                <div class="form-group mt-4">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" />
                </div>

                <div class="form-group mt-4">
                    <label for="">City</label>
                    <input type="password" name="city" class="form-control" />
                </div>

                <div class="form-group mt-4">
                    <label for="" class="d-block">Fav color</label>
                    <input type="radio" name="favcol" id="red" class="form-check-input" value="red color" /><label for="red" class="ms-2">Red</label>
                    <input type="radio" name="favcol" id="green" class="form-check-input" value="green color" /><label for="green" class="ms-2">Green</label>
                    <input type="radio" name="favcol" id="blue" class="form-check-input" value="blue color" /><label for="blue" class="ms-2">Blue</label>
                </div>
            
                <div class="form-group mt-4">
                    <label for="">Bio</label>
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