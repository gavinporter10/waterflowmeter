<?php
	session_start();

include 'dbh.php';
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "Your Username or Password is incorrect!";
} else{
	//echo "You are logged in.";
	$_SESSION['id'] = $row['id'];
	
	//testing
	$_SESSION['first'] = $row['first'];
	$_SESSION['last'] = $row['last'];
	$_SESSION['uid'] = $row['uid'];
	
	header("Location: db.php");
}

//header("Location: db.html");