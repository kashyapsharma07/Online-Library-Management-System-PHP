<?php
// This file is part of the MyApp project.
// MyApp is free software: you can redistribute it and/or modify
$host = "sql212.infinityfree.com";               // The address of your database server
$dbname = "if0_38796974_myLibrary";           // Your database name
$username = "if0_38796974";              // Your database username
$password = "CA25PXjt43i";              // Your database password

$conn = new mysqli($host, $username, $password, $dbname);  // Tries to connect

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);      // If it fails, show error
}
echo "Connected successfully!";                             // If it works, show message
?>