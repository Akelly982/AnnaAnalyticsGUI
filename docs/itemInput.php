<?php

    $childId = $_POST["childId"];

    // echo '<h1> I got somthing to say </h1>' . $childId;

    switch ($childId) {
        case '1A':
            include 'inputItem1A.php';
            break;
        default:
            echo "default hit";
    }

    

?>