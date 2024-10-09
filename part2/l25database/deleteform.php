<?php

ini_set("display_errors",1);

// if(isset($_POST["submit"])){
//     echo "Form submitted";
// }


// => PDO 

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "mydbserver2025";
    $dbname = "phpone";

    // DB Connect

    try{

        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT id,name,email FROM users");
        $stmt->execute();

        echo "Connected Successfully <br/>";

        // while($row = $stmt->fetch()){
        //     echo "ID: " . $row['id'] . "  Name : " . $row['name'] . " Email : " . $row['email'] . "<br/>";
        // }


    }catch(PDOException $e){

        echo "Error Found: " .$e->getMessage();

    }


    if(isset($_POST["submit"])){

        $qry = $conn->prepare("DELETE FROM users WHERE id=:id");
        $qry->bindParam(":id",$id);

        $id = $_POST["submit"];

        $qry->execute();

        echo $qry->rowCount() . "User Delete Successfully";


        $qry = null;
        $conn = null;


        //Redirect by PHP 
        // $currentpage = $_SERVER["PHP_SELF"];
        // header("Location:$currentpage");
        // exit;

        //Redirect by javascript 

        echo "<script>
            // method 1
            //window.location.href = window.location.href;

            //method 2
            //window.location.replace(window.location.href);

            //method
            window.location.assign(window.location.href);

        </script>";

    }
   



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Delete Form</title>

         <!--1 css 1js bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <!-- 1css 1js  bootstrap -->
     
    </head>
    <body>

        <div class="container">

            <div class="col-md-6 mx-auto">
                <h3 class="text-center my-3">Delete Form</h3>

                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            while($row = $stmt->fetch()){

                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row["email"];

                                echo "<tr>";
                                   echo "<td>$id</td>";
                                   echo "<td>$name</td>";
                                   echo "<td>$email</td>";
                                   echo "<td><form action='' method='post'><button type='submit' name='submit' id='submit' class='btn btn-danger btn-sm rounded-0' value=$id>Delete</button></form></td>";
                                echo "</tr>";

                            }

                        ?>

                    </tbody>
                </table>


            </div>

        </div>

        <!--1 css 1js bootstrap -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- 1css 1js  bootstrap -->
    </body>
</html>

