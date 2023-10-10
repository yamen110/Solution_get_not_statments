<?php
    $host = "localhost";
    $user = 'root';
    $password = "";
    $db = "Friend";
    // ? Do Connection With Database  
    $sql = mysqli_connect($host , $user , $password , $db);
    if(!$sql){
        echo "Error";
    }
?>