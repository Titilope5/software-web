<?php
    $server= "localhost";
    $user = "root";
    $pword = '';
    $db = "oboy";
    
    $conn = mysqli_connect($server, $user, $pword, $db);
    
    if (!$conn) {
        echo "db connection error";
    }   
    return;
?>