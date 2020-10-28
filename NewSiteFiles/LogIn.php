<?php


$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
}

$conn = mysqli_connect("localhost","root", null, "userinfo") or die(mysqli_error("Connection failed"));


$sql = "SELECT * FROM userinfo WHERE (username='$username' AND password='$password')";


if ($conn->query($sql) == true) {
    
       echo "<a href='cats.html'>click this<a>";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>


