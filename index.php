<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Test Login and Registration </title>
<link rel="stylesheet" Type="text/css" href"style.css">
</head>

<body>

<h1>Login</h1>
<form action="login.php" method="POST">
	<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit">Login</button>
</form>

<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "You are not logged in";
	}
?>

<br><br>

<h1>Sign-up</h1>
<form action="signup.php" method="POST">
	<input type="text" name="first" placeholder="Firstname"><br>
	<input type="text" name="last" placeholder="Lastname"><br>
	<input type="text" name="email" placeholder="Email"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit">SIGN UP</button>
</form>

<br><br>

<form action="logout.php">
	<button>LOG OUT</button>
</form>



</body>

</html>