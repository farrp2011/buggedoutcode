<?php
	require_once './controller/definitions.php';
	require_once './controller/html_fags.php';;
	require_once './controller/Users.php';

	$user = new Users();
	$user->isLeggerIn($_COOKIE[COL_COOKIE]);

?>
<!DOCTYPE html>
<?php echo COPYRIGHT;?>
<html>
    <head>
		  <?php echo HEAD_STUFF ?>
        <meta charset="UTF-8">
        <title>Welcome</title>
    </head>
    <body>
		  <?php getNav(null, $user) ?>
		  <br/>
		  <p>Welcome will verify the user then send them on to somewhere else <a href="menu.php">Like Here</a></p>
		  <?php getfoot(); ?>
    </body>
</html>
