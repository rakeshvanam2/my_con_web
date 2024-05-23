<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "my_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed:" );
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message =$_POST['message'];

$sql="INSERT INTO `my_website` (`id`, `name`, `email`, `phone`, `message`) VALUES (NULL, '$name', '$email', '$phone', '$message')";

if($conn->query($sql)==True)
{
  echo "Contact details saved successfully";
} 
else
 {
    echo "Invalid input.";
}

$conn->close();

