<?php

    
$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
}

$conn = mysqli_connect("localhost","root", null, "userinfo") or die(mysqli_error("Connection failed"));


$sql = "INSERT INTO `userinfo`(userID, username, password) 
VALUES (null, '$username', '$password') ";

if ($conn->query($sql) === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

