<?php
	session_start();

include 'dbh.php';

$first = $_POST['First_Name'];
$last = $_POST['Last_Name'];
$email = $_POST['Email'];
$pwd = $_POST['Password'];

echo $first. "<br>";
echo $last. "<br>";
echo $email. "<br>";
echo $pwd. "<br>";

$sql = "INSERT INTO user (First_Name, Last_Name, Email, Password) 
VALUES ('$first', '$last', '$email', '$pwd')";
$result = mysqli_query($conn, $sql);

header("Location: index.php");