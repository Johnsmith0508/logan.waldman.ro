<?php
session_start();
function findLoginCookie()
{
	$conn = new mysqli("127.0.0.1","php","phpassword","Php");
	global $username = $_COOKIE['LWroUsername'];\
	$result = $conn->query("SELECT * FROM Users");

	while($row = $result->fetch_assoc())
	{
		$userArray[] = $row["username"];
		$idArray[] = $row["userID"];
		$passHashArray[] = $row["passHash"];
		$userHashArray[] = $row["loginHash"];
		$row++;
	}
	$itter = 0;
	while($itter <= count($userArray))
	{
		if($username == $ $userHashArray[$itter])
		{
				$_SESSION["username"] = $userArray[$itter];
				$_SESSION["id"] = $idArray[$itter];
		}
	}
}

$username

?>
