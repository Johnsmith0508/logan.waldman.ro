<html>
	<body>
		<?php
echo `/usr/local/Cellar/git/2.3.0/bin/git pull 2>&1`;
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $_POST);
fclose($myfile);
		?>
	</body>
</html>