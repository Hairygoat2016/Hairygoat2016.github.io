<?php

$fname = $_POST["FirstName"];
$lname = $_POST["LastName"];
$email = $_POST["Email"];
$rating = $_POST["Rating"];

$host = "localhost";
$dbname = "sql8650496";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

echo "Connection was successful.";
?>