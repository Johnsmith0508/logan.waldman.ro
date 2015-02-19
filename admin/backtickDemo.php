<html>
	<body>
		<?php
echo `/usr/local/Cellar/git/2.3.0/bin/git pull 2>&1`;
$myfile = fopen("demo.json", "w") or die("Unable to open file!");
fwrite($myfile, file_get_contents('php://input'));
fclose($myfile);
		?>
	</body>
</html>