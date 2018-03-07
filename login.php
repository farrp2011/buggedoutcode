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
require_once 'controller/definitions.php'; 
require_once 'controller/html_fags.php';
?>
<html>
   <head>
		<?php echo HEAD_STUFF ?>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
		<?php getNav(null) ?>
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
