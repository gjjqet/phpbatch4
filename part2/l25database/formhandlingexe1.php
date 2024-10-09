<!DOCTYPE html>
<html>
    <head>
        <title>Display Handling Exercise 1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container mt-5">

            <!-- <form action="displayhandlingexe1.php" method="GET">

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control" />
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form> -->


            <form action="./displayhandlingexe1.php" method="POST">

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control" />
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>
        
    </body>
</html>