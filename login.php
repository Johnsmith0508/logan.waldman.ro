<?php
session_start();
$numUsers = $ittr = 0;
$userFail = $pswdFail = true;
$serverName = "127.0.0.1";
$userName = "php";
$password = "phpassword";
$usernameErr = $passwordErr = "";
$dbName = "Php";
//$idArray = $pswdArray = $userArray = $passHashArray = $userhashArray = array();
$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$result = $conn->query("SELECT * FROM Users");
while($row = $result->fetch_assoc())
{
$userArray[] = $row["username"];
$idArray[] = $row["userID"];
$passHashArray[] = $row["passHash"];
$userHashArray[] = $row["loginHash"];
$numUsers++;
$row++;
	
}
//echo "<br> closed";
if ($_GET['working'])
{
	$sentPass = password_hash($_POST['password'], PASSWORD_DEFAULT, ["cost" => 10]);
	while ($ittr <= $numUsers)
	{
		echo $userArray[$ittr] . $passHashArray[$ittr] . $_POST['password'] . password_hash($_POST['password'], PASSWORD_DEFAULT, ["cost" => 10]) . "<br>";
		if($userArray[$ittr] == $_POST['username'])
		{
			$userFail = false;
			$sentpass = $_POST['password'];
			$pswdworks = password_verify($sentpass,$passHashArray[$ittr]);
			if($sentPass == $passHashArray[$ittr])
			{
				$pswdFail = false;
				$_SESSION["username"] = $userArray[$ittr];
				$_SESSION["id"] = $idArray[$ittr];
				if($_POST['createCookie']=="true")
				{
					setcookie("LWroUsername", $userHashArray[$ittr] , time() + (86400 * 30), "/");
				}
			}
		}
		$ittr++;
	}
		if($userFail)
		{
			$usernameErr = "<p style='color: red;'>* Incorrect Username</p>";
		}

		if($pswdFail) $passwordErr = "<p style='color: red;'>* Incorrect Password</p>";
		
	
}
$conn->close();
?>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="signupStylesheet.css">
	</head>
	<body>
		<?php
		?>
		<div class="signup" id="main">
		<h1>Login</h1>
		<form action="?working=true" method="post">
			Username: <input type="text" name="username" /><?php echo $usernameErr; ?><br>
			Password: <input type="password" name="password" /><?php echo $passwordErr; ?><br>
			<input type="checkbox" name="createCookie" value="true" /> Stay Signed in <br>
			<input type="submit" />
		</form>
		</div>
	</body>
</html>
