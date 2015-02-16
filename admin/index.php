<?php
session_start();
include 'autologin.php';
findLoginCookie();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<?php
	?>
	<form action="remoteAdmin.php" method="post">
		UserName: <input type="text" name="uname"><br>
		Password: <input type="password" name="pswd"><br>
		<input type="submit">
	</form>
</body>
</html>
