<?php


$companyname = $_POST["companyname"];
$companyemail  = $_POST["companyemail"];
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

$sql = "INSERT INTO `company` (`username`, `name`, `email` , `pin`,`password`)
VALUES ('$user', '$companyname', '$companyemail','$pin','$pw')";

if (mysqli_query($conn, $sql)) {
    header("Location:http://localhost:8080/work/login/company.php"); /* Redirect browser */
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>