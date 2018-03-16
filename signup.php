<?php
	require_once 'controller/definitions.php';
	require_once 'controller/html_fags.php';
	require_once 'controller/Users.php';
	require_once 'controller/regcode.php';

	$user = new Users();
	if($user->isLoggedIn($_COOKIE[COL_COOKIE]))
	{
		include 'err404.php';
		exit();
	}
	$err = null;
	if(isset($_POST[COL_EMAIL]) && isset($_POST[COL_PASSWORD]) && isset($_POST[COL_FNAME]) && isset($_POST[COL_LNAME]) && isset($_POST[COL_CODE]))
	{
		//Okay here is where we need to make a new user
		//we check the code first
		$codeChecker = new RegCode();
		if($codeChecker->checkCode(strtolower($_POST[COL_CODE])) == false)
		{
			$err = "The code is bad.";
		}
		else
		{
			if($user->creatNewUser($_POST[COL_EMAIL], $_POST[COL_PASSWORD], $_POST[COL_FNAME], $_POST[COL_LNAME]))
			{
				$codeChecker->deleteCode($_POST[COL_CODE]);
				header("Location: login.php");
				exit();
			}
			else
			{
				$err = "The email is bad.";
			}
		}
	}
	//if we made it this we either have


?>
<!DOCTYPE html>
<?php echo COPYRIGHT;?>
<html>
   <head>
		<?php echo HEAD_STUFF ?>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
		<?php getNav(null, $user) ?>
		<br/>
		<div class="container">
			<div class="text-center"><h2>Registration is Closed</h2></div>
			<?php
				if($err != null)
				{
					echo ('<div class="col-4 mx-auto" style="padding: 10px;">'.$err.'</div>');
				}
			?>

			<form method="post" action=<?php echo('"'.DOMAIN_NAME.'signup.php"');?> >

					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto" style="padding: 10px;">
						<div class="form-group">
							<label for="First Name">First Name:</label>
							<input type="text" class="form-control" id="" name=<?php echo('"'.COL_FNAME.'"');?>>
						<div/>
						<div class="form-group">
							<label for="Last Name">Last Name:</label>
							<input type="text" class="form-control" id="" name=<?php echo('"'.COL_LNAME.'"');?>>
						</div>
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" id="email" name=<?php echo('"'.COL_EMAIL.'"')?>>
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="pwd" name=<?php echo('"'.COL_PASSWORD.'"')?>>
						</div>
						<div class="form-group">
							<label for="pwd">Confirm Password:</label>
							<input type="password" class="form-control" id="pwd" name="">
						</div>
						<div class="form-group">
							<label for="pwd">Code:</label>
							<input type="text" class="form-control" id="pwd" name=<?php echo('"'.COL_CODE.'"')?>>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>
			</form>
			<div class="col-4 mx-auto text-center">
				<a href=<?php echo('"'.DOMAIN_NAME.'login.php"');?>>Login</a>
			</div>
			</div>
		</div>
		<?php getfoot(); ?>
	</body>
</html>
