<?php

session_start();

// => Single Destroy Session 

// unset($_SESSION['idxcount']);
// echo "Session Destrou Successfully";


// => All Destroy Session

session_destroy();
echo "All Session Destroy Successfully";



?>