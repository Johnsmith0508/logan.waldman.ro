<?php
session_start();
//require_once('autologin.php');
//findLoginCookie();
$test = $_COOKIE['LWroUsername'];
$SESSION['username'] = $test;
$conn = new mysqli("127.0.0.1","php","phpassword","Php");
$out = $conn->query("SELECT * FROM Users WHERE loginHash='" . $_SESSION['username'] . "'");
$conn->close();


?>
<html>
	<head>
		<title>Hello</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            document.addEventListener('click', function(event) {
                var target = event.target;
                if (target.tagName.toLowerCase() == 'a')
                {
                    var port = target.getAttribute('href').match(/^:(\d+)(.*)/);
                    if (port)
                    {
                        target.href = port[2];
                        target.port = port[1];
                    }
                }
            }, false);
        </script>
		<script>
			$(function(){
				$("#log").post("autologin.php")
			})
		</script>
	</head>
	<body>
		<div class="nav">
			<a href="/Pages/misc-add">Misc - Add</a> | <a href="/login">Log in</a>
		</div>
		<div class="head">
			<h1>It works!</h1>
		</div>
		<div class="main">
			<p>This is temporary until stuff happens</p>
			<p>thare is also this <a href=":8080/jenkins">Jenkins server</a></p>
			<p>Now auto pulling from github (hopefully)</p>
		</div>
	</body>
</html>
