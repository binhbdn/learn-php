<?php
    $t = date("H");

    if ($t < "10") {
        echo "Good morning!";
    } elseif ($t < "20") {
        echo "Good afternoon!";
    } else {
        echo "Have a good night!";
    }
?>