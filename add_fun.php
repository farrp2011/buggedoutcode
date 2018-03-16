<?php
	require_once 'controller/definitions.php';
	require_once 'controller/html_fags.php';
	require_once 'controller/Users.php';

	$user = new Users();
	if(!$user->isLoggedIn($_COOKIE[COL_COOKIE]))
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
        <title>Add Fun</title>
    </head>
    <body>
		  <?php getNav(null, $user) ?>
		  <?php getfoot(); ?>
    </body>
</html>
