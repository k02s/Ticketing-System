<?php
// we declare variable for store DB info in variables and used for connection
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "sonybuy";

    $connection= mysqli_connect($server_name , $user_name , $password , $db_name )or die("DB connection error");


?>