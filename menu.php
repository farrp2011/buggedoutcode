<?php
	require_once './controller/definitions.php';
	require_once './controller/html_fags.php';
	require_once './controller/Users.php';

	$user = new Users();

	//echo("var dump is happening now");
	//var_dump($user->isLoggedIn($_COOKIE[COL_COOKIE]));
	if(!($user->isLoggedIn($_COOKIE[COL_COOKIE])))
	{
		include 'err404.php';
		exit();
	}

?>
<!DOCTYPE html>
<?php echo COPYRIGHT;?>
<html>
	<head>
		<?php echo HEAD_STUFF ?>
		<meta charset="UTF-8">
		<title>Menu</title>
	</head>
	<body>
		<?php getNav(null, $user) ?>
		<br/>

		<div class="container">
			<div class="row"><h2 class="mx-auto text-center">Admin Control Panel</h2></div>
			<div class="row">
				<div class="col-sm-11 col-md-10 col-lg-8 col-xl-6 mx-auto card m-1 p-1">
					<h3 class="mx-auto">Add to Blog</h3>
					<p>We need employers to see what you know and what you can do.  Write up the best post possible Blog post and go get the best paying job possible.</p>
					<a class="specLink rightBorder btn btn-dark mx-auto col-sm-8 col-md-6" href=<?php echo('"'.DOMAIN_NAME.'add_fun.php"');?>>Create New Post</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-11 col-md-10 col-lg-8 col-xl-6 mx-auto card m-1 p-1">
					<h3 class="mx-auto">Add to Fun Blog</h3>
					<p>The fun blog is a separate blog for showing your personal side.  Here is what you post about your camping trips and other non-tech subjects.</p>
					<a class="specLink rightBorder btn btn-dark mx-auto col-sm-8 col-md-6" href=<?php echo('"'.DOMAIN_NAME.'add_fun.php"');?>>Create New Post</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-11 col-md-10 col-lg-8 col-xl-6 mx-auto card m-1 p-1">
					<h3 class="mx-auto">Add Registration Code</h3>
					<p>This is for adding new users to the Blog. Please do not make new code that will sit in the database. We don't need to creates any un-need security holes.</p>
					<div class="mx-auto col-12">
						<form method="post" class="mx-auto col-12" action=<?php echo('"'.DOMAIN_NAME.'menu.php"');?> >
							<label for="pwd">New Code: </label>
							<input type="text" class="mx-auto" name=""><!-- make sure to change the name -->
							<br/>
							<button type="submit" class="btn-dark mx-auto col-sm-10 col-md-8 col-lg-6 col-xl-4">Create Code</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php getfoot(); ?>
	</body>
</html>
