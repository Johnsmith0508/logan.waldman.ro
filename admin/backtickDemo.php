<html>
	<body>
		<?php
echo `/usr/local/Cellar/git/2.3.0/bin/git pull 2>&1`;
$stdout = fopen("push.json","w");
fwrite($stdout,$_POST)
fclose($stdout);
		?>
	</body>
</html>