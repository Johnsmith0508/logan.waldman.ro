<?php
session_start();
//$unameHash = $passHash = "";
$conn = new mysqli("127.0.0.1","php","phpassword","Php");
if($_GET['working'])
{
	$unameLength = strlen($_POST['username']);
	$passLength = strlen($_POST['password']);
	if($unameLength >= 5) {$passMinUname = true;}else{$passMinUname = false;}
	if($unameLength <= 20){ $passMaxUname = true;}else{$passMaxUname = false;}
	if($passLength <= 20){ $passMaxPass = true;}else{$passMaxPass = false;}
	if($_POST['accept'] == "y"){ $passToc = true;}else{$passToc = false;}
	if($_POST['password'] == $_POST['confPswd']){ $passEqual = true;}else{ $passEqual  = false;}
	$passHash = password_hash($_POST['password'], PASSWORD_DEFAULT, ["cost" => 10]);
	$unameHash = sha1($_POST['password'] . time());
	if($passMinUname && $passMaxUname && $passMaxPass && $passToc && $passEqual)
	{
		echo "done";
		$result = $conn->query('INSERT INTO Users (username, loginHash, email, passHash) VALUES ( "'. $_POST['username'] . '" , "' . $unameHash . '" , "' . $_POST['email'] . '" , "' . $passHash . '")');
	}
	echo $unameHash . $passHash;
}
$conn->close();
?>
<html>
  <head>
    <title>Signup for account</title>
    <link rel="stylesheet" type="text/css" href="signupStylesheet.css">
  </head>
  <body>
  	<div id="main">
	  <h1>Sign Up</h1>
	  <form action="?working=true" method="post">
		  Username <input type="text" name="username" /><br />
		  Password <input type="password" name="password" /><br />
		  Confirm Password <input type="password" name="confPswd" /> <br />
		  Email <input type="email" name="email" /><br />
		  <input type="checkbox" name="accept" value="y" /> I agree to nothing <br />
		  <input type="submit" />
	  </form>
	  </div>
  	<?php
		
	?>
  </body>
