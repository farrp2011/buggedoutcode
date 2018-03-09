<!DOCTYPE html>
<!--
Copyright (C) 2018 Paul Farr

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

Paul Farr would really like a well paying job as well. Email: farrp2011@live.com
-->
<?php
	require_once './controller/definitions.php';
	require_once './controller/html_fags.php';
	require_once './controller/Users.php';

	$user = new Users();
	if(!$user = $user->isLoggedIn($_COOKIE[COL_COOKIE]))
	{
		header("Location: index.php");
		exit();
	}

?>
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
				<div class="col-8 mx-auto card m-1 p-1">
					<h3 class="mx-auto">Add to Blog</h3>
					<p>We need employers to see what you know and what you can do.  Write up the best post possible Blog post and go get the best paying job possible.</p>
					<a class="specLink rightBorder btn btn-dark mx-auto col-4" href=<?php echo('"'.DOMAIN_NAME.'add_fun.php"');?>>Create New Post</a>
				</div>
			</div>
			<div class="row">
				<div class="col-8 mx-auto card m-1 p-1">
					<h3 class="mx-auto">Add to Fun Blog</h3>
					<p>The fun blog is a separate blog for showing your personal side.  Here is what you post about your camping trips and other non-tech subjects.</p>
					<a class="specLink rightBorder btn btn-dark mx-auto col-4" href=<?php echo('"'.DOMAIN_NAME.'add_fun.php"');?>>Create New Post</a>
				</div>
			</div>
			<div class="row">
				<div class="col-8 mx-auto card m-1 p-1">
					<h3 class="mx-auto">Add Registration Code</h3>
					<p>This is for adding new users to the Blog. Please do not make new code that will sit in the database. We don't need to creates any un-need security holes.</p>
					<div class="mx-auto">
						<form method="post" action=<?php echo('"'.DOMAIN_NAME.'menu.php"');?> >
							<label for="pwd">New Code: </label>
							<input type="text" class="" name=""><!-- make sure to change the name -->
							<button type="submit" class="btn">Create Code</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php getfoot(); ?>
	</body>
</html>
