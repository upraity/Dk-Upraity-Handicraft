<?php
    $server = "";
    $username = "";
    $pass = "";
    $db = "";

    $conn = mysqli_connect($server, $username, $pass, $db);

    if(!$conn){
        echo mysqli_error();
    }
    // else{
    //     echo 'success';
    // }
?>
