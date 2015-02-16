<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<?php
	/*
		$dbHandle = sqlite_open("db/test.db",0666,$err);
		if (!$dbhandle) 
		{
			echo"nope";
			die ($error);
		}
		$stm = "CREATE TABLE Friends ( Id integer PRIMARY KEY," .
			"Name text UNIQUE NOT NULL, Sex text CHECK{Sex IN ('M','F')))";

		$ok = sqlite_exec($dbHandle, $stm, $error);

		if (!$ok)
		{
			die("cannot exicute query $error");
		}

		echo "Created sucsesfully";

		sqlite_close($dbHandle);*/

		if($_GET['showInfo'])
		{
			echo phpinfo();
		}
		//if($_GET['sql'])
		//{
			echo sqlite_libversion();
		//}
	?>
</body>
</html>

