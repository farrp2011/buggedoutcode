<?php
	require_once './controller/definitions.php';
	require_once './controller/html_fags.php';
	require_once './controller/Users.php';

	$user = new Users();
	$user->isLoggedIn($_COOKIE[COL_COOKIE]);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo HEAD_STUFF?>
		<meta charset="UTF-8">
		<title>404</title>
	</head>
	<body>
		<?php getNav(null, $user);?>
		<div class="container">
			<div class="row">
				<div class="col-4 mx-auto text-center">
					<h1>Oppss... 404</h1>
					<p>If you found a broken link please send me an email at farrp2011@live.com</p>
				</div>
			</div>
		</div>
		<?php getfoot();?>
	</body>
</html>
