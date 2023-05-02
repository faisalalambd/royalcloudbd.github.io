<?php

session_start(); // Starting Session

$error = ''; // Variable To Store Error Message


if (isset($_POST['submit'])) {

    if (empty($_POST['phone']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        // Define $username and $password
        $phone = $_POST['phone'];
        $password = $_POST['password'];


        // mysqli_connect() function opens a new connection to the MySQL server.
        $conn = mysqli_connect("localhost", "root", "", "royal");


        // SQL query to fetch information of registerd users and finds user match.
        $query = "SELECT phone, password from registrations where phone=? AND password=? LIMIT 1";


        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $phone, $password);
        $stmt->execute();
        $stmt->bind_result($phone, $password);
        $stmt->store_result();


        if ($stmt->fetch()){ //fetching the contents of the row 
            $_SESSION['login_user'] = $phone; // Initializing Session
        }
        header("location:  login_failed.php"); // Redirecting To Profile Page
    }


    mysqli_close($conn); // Closing Connection
    
}