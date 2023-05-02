<?php

    $server_name        =   "localhost";
    $user_name          =   "root";
    $user_password      =   "";
    $database_name      =   "royal"; 

    $connection = mysqli_connect($server_name, $user_name, $user_password, $database_name);

    if($connection){

        // echo "Connected!";

    }else{

        echo "Connection Failed!" . mysqli_connect_error();

    }