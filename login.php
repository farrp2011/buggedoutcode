<?php
	require_once './controller/definitions.php';
	require_once './controller/html_fags.php';
	require_once './controller/Users.php';

	$user = new Users();
	$user->isLoggedIn($_COOKIE[COL_COOKIE]);

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
			 <form method="post" action=<?php echo('"'.DOMAIN_NAME.'welcome.php"');?> >
			<div class="text-center"><h2>Registration is Closed</h2></div>
				<div class="col-4 mx-auto" style="padding: 10px;">
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" id="email" name=""><!-- make sure to change the name -->
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input type="password" class="form-control" id="pwd" name=""><!-- make sure to change the name -->
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<?php getfoot(); ?>
	</body>
</html>
