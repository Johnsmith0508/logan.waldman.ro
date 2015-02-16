<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
	<body>
		<?php
			$authKey = "r5gWX0b5D0vDumCCQ";
			$sucsessfulLogin = false;
			if($_POST["uname"] == "Johnsmith0508" && $_POST["pswd"] == "WordPass")
			{
				buildPage();
				$sucsessfulLogin = true;
			}

			if($_GET['preAuth'] == $authKey)
			{
				$sucsessfulLogin = true;
				buildPage();
			}

			if(!$sucsessfulLogin)
			{
				echo "You Must Log On For That";
			}

			function buildPage()
			{
				echo '<a href="?command=tomStart&preAuth=r5gWX0b5D0vDumCCQ">Start tomact Server</a><br/>';
				echo '<a href="?command=tomStop&preAuth=r5gWX0b5D0vDumCCQ">Stop tomact Server</a>';
				runCmds();
			}

			function runCmds()
			{
				if($_GET['command'] == "tomStart")
				{
					echo exec("/usr/local/Cellar/tomcat7/7.0.57/libexec/bin/startup.sh");
					echo "<br/>Starting";
				}elseif ($_GET['command'] == "tomStop")
				{
					echo exec("/usr/local/Cellar/tomcat7/7.0.57/libexec/bin/shutdown.sh");
					echo "<br/>Stopping";
				}
			}
		?>

	</body>
</html>
