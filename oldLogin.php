<html>
	<head>
		<title><?php if($_GET['signUp']){echo "Sign Up";}else{echo "Log in";} ?></title>
		<link rel="stylesheet" type="text/css" href="signupStylesheet.css" />
	</head>
	<body>
		<?php
			$canLogOn = $signupSucess = true;
			$UnameErr = $pswdErr = $confErr = $mailErr = $acceptErr = "";
			if($_GET['signUp']){ buildSignUp("","","","",""); $canLogOn = false;}
			if($_GET['created'] == "inProgress")//if in progress of creating
			{
				$canLogOn = false;
				if(empty($_POST['createName']))
				{
					$UnameErr = "Please Select A valid Username";
					$signupSucess = false;
				}
				if(empty($_POST['createPswd']))
				{
					$paswdErr = "Please select a valid password";
					$signupSucsess = false;
				}
				if($_POST['confirmPswd'] != $_POST['createPswd'])
				{
					$confErr = "Passwords Must Match";
					$signupSucsess = false;
				}
				if(empty($_POST['createEmail']))
				{
					$confErr = "You Must Provide an Email";
					$signupSucsess = false;
				}
				if(!$_POST['acceptToc'])
				{
					$acceptErr = "You must accept the terms and conditions";
					$signupSucsess = false;
				}
				if(!$signupSucess){buildSignUp($UnameErr, $pswdErr, $confErr, $mailErr, $acceptErr);}
			}
			if($canLogOn) buildLogin();
			function buildLogin()
			{
				echo "<div id='login'><form action='login?login=inProgress' method='POST'>" .
					"<p>UserName: <input type='text' name='name' /></p><br>" .
					"<p>Password: <input type='password' name='password' /></p><br>" .
					"<input type='submit' /> </form></div>";
			}
			function buildSignUp($UnameErr, $pswdErr, $confErr, $mailErr, $acceptErr)
			{
				echo "<div id='signup'><form action='login?created=inProgress' method='POST'>" .
					"<p>UserName: <input type='text' name='createName' /> ". $UnameErr . "<br>" .
					"Password: <input type='password' name='createPswd' />" . $pswdErr . "<br>" .
					"Confirm: <input type='password' name='confirmPswd' />" . $confErr . "<br>" .
					"Email: <input type='text' name='createEmail' />" . $mailErr . "<br>" .
					"I have read and accept the tearms and conditions: <input type='checkbox' name='acceptToc' />" . $acceptErr . "</p><br>" .
					"<input type='submit' /> </form></div>";
			}
			function buildError()
			{
				
			}
			function buildSucsess()
			{
				
			}
		?>
	</body>
</html>