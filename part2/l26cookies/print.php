<?php

// Note :: Cookies store on Users's Current Brower 

echo time();

echo "<br/>";

            // s m hr day
echo time()+(60*60*24*2); // 2days 

echo "<br/>";

echo time()+(86400*2); // 2 days

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <ul>
            <li><a href="./cookiesset.php" target="_blank">Set Cookies</a></li>
            <li><a href="./cookiesread.php" target="_blank">Read Cookies</a></li>
            <li><a href="./cookiesdelete.php" target="_blank">Delete Cookies</a></li>
            <li><a href="./other/cookiesset2.php" target="_blank">Set Cookies 2</a></li>
            <li><a href="./other/cookiesread2.php" target="_blank">Read Cookies2</a></li>
        </ul>
    </body>
</html>