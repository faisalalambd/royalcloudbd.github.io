<?php

//Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) 
$link = mysqli_connect("localhost", "root", "", "royal");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name                       = ($_REQUEST['user_name']);
$phone                      = ($_REQUEST['phone']);
$email                      = ($_REQUEST['email']);
$password                   = ($_REQUEST['password']);
$confirm_password           = ($_REQUEST['confirm_password']);
$address                    = ($_REQUEST['address']);




echo $name;
echo $phone;
echo $email;
echo $password;
echo $confirm_password;
echo $address;


// Attempt insert query execution
if ($password == $confirm_password) {
    $sql = "INSERT INTO registrations (
    name, 
    phone, 
    email, 
    password,  
    address) 

    VALUES (
        '$name',
        '$phone',
        '$email',
        '$password',
        '$address')";
}

if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
?>