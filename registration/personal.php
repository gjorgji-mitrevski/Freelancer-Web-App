<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email  = $_POST["email"];
$pw = md5($_POST["password"]);
$pin = $_POST["pin"];
$user = $_POST["username"];


$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "baza";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `personal` (`firstname`, `lastname`, `email` , `pin`,`password` , `username`)
VALUES ('$firstname', '$lastname', '$email','$pin','$pw', '$user')";

if (mysqli_query($conn, $sql)) {
    header("Location:http://localhost:8080/work/login/personal.php"); /* Redirect browser */
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>