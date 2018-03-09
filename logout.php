<?php
	require_once './controller/definitions.php';
	require_once './controller/html_fags.php';
	require_once './controller/Users.php';

	//$user = new Users();
	//$user->isLoggedIn($_COOKIE[COL_COOKIE]);
	setcookie(COL_COOKIE, "-1", time()-1);

?>
<!DOCTYPE html>
<?php echo COPYRIGHT;?>
<html>
    <head>
		  <?php echo HEAD_STUFF ?>
        <meta charset="UTF-8">
        <title>Logout</title>
    </head>
    <body>
		  <?php getNav(null, $user) ?>
			<h1>You are logged out</h1>
		  <?php getfoot(); ?>
    </body>
</html>
