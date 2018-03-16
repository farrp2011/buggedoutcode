<?php
	require_once './controller/definitions.php';
	require_once './controller/html_fags.php';
	require_once './controller/Users.php';

	$user = new Users();
	setcookie(COL_COOKIE, "-1", time()-1);
	//We don't need to ask if the user is logged on this page

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
