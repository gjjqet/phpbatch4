<?php

$name = $email = $password = $city = $favcolor = $bio = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = textfilter($_POST["name"]);
    $email = textfilter($_POST["email"]);
    $password = textfilter($_POST["password"]);
    $city = textfilter($_POST["city"]);
    $favcolor =textfilter($_POST["favcolor"]);
    $bio =textfilter($_POST["bio"]);
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
        <title>Form Handling Exercise 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container mt-5">

           
            <form action=" <?php $_SERVER['PHP_SELF'] ?> " method="POST">

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="">Fav Color</label>
                    <input type="radio" name="favcolor" id="favrd" class="form-check-input" value="Red Color" /><labellabel for="favrd">Red</label>
                    <input type="radio" name="favcolor" id="favgn" class="form-check-input " value="Green Color" /><label for="favgn">Green</label>
                    <input type="radio" name="favcolor" id="favbl" class="form-check-input" value="Blue Color" /><label for="favbl">Blue</label>
                </div>

                <div class="form-group mb-3">
                    <label for="bio">Bio</label>
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