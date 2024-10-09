<!DOCTYPE html>
<html>
    <head>
        <title>Disply Handling Revision</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container mt-5">

            <div>

                <h1>Hello Friend! Welcome to <span><?php echo $_GET["city"] ?></span></h1>
                <p>I am <span><?php echo $_GET["name"] ?></span>. I got your data by passing GET method</p>

            </div>

            <div class="mt-5">

                <h1>Hello Friend! Welcome to <span><?php echo $_POST["city"] ?></span></h1>
                <p>I am <span><?php echo $_POST['name'] ?></span>. I got your data by passing POST method</p>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>