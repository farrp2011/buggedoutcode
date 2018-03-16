<?php
	require_once './controller/definitions.php';
	require_once './controller/html_fags.php';
	require_once './controller/Users.php';
	require_once './controller/Blog.php';
	//echo(COL_URL);
	if(!isset($_GET[COL_URL]))
	{
		require_once 'err404.php';
		exit();
	}

	$user = new Users();
	$user->isLoggedIn($_COOKIE[COL_COOKIE]);


?>
<!DOCTYPE html>
<?php echo COPYRIGHT;?>
<html>
    <head>
		  <?php echo HEAD_STUFF ?>
        <meta charset="UTF-8">
        <title>Privacy</title>
    </head>
    <body>
		  <?php getNav(null, $user); ?>

			<div class="container">
				<div class="row">

					<div class="col-8 mx-auto">
						<h3><?php ?></h3>
					</div>

				</div>
			</div>

		  <?php getfoot(); ?>
    </body>
</html>
