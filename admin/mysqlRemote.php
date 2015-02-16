<?php session_start();?>
<html>
	<body>
		<?php
if ($_GET['connect']){
	$_SESSION['mysqlusr'] = $_POST['username'];
	$_SESSION['mysqlpass'] = $_POST['password'];
	$_SESSION['mysqldb'] = $_POST['database'];
	$conn = new mysqli("127.0.0.1", $_SESSION['mysqlusr'],$_SESSION['mysqlpass'],$_SESSION['mysqldb']);
	$result = $conn->query($_POST['cmd']);
	$bgncmnt = "<!--";$endcmnt = "-->";
	$logout = "<form action='?logout=true' method='post'><input type='submit' value='Logout' />";
	$conn->close();
}
if ($_GET['logout']){
	$_SESSION['mysqlusr'] = "";
	$_SESSION['mysqlpass'] = "";
	$_SESSION['mysqldb'] = "";
}
		?>
		<form action="?connect=true" method="post">
			<?php echo $logout . $bgncmnt;?>
			MySQL username: <input type="text" name="username" /><br />
			MySQL password: <input type="password" name="password" /><br />
			MySQL database: <input type="text" name="database" /><br />
			<?php echo $endcmnt;?>
			MySQL command: <input type="text" name="cmd" /><br />
			<input type="submit" />
		</form>
		<?php echo $result;?>
	</body>
</html>