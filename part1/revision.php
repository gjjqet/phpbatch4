<?php

$query = $_SERVER["QUERY_STRING"];

switch($query){
    case "google":
        header("Location:https://www.google.com");
        exit;
        break;
    case "linkedin":
        header("Location:https://www.linkedin.com");
        exit;
        break;
    case "youtube":
        header('Location:https://youtube.com');
        exit;
        break;
    default:
       "This file is not found";
       break;
}

?>

