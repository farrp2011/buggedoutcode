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
require_once './definitions.php'; 
require_once './html_fags.php';;
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bugged Out Code</title>
		<?php echo HEAD_STUFF ?>
	</head>
	<body>
		 <?php getNav(HOME_PAGE)?> 
		 <br/>
		<div class="container">
			<ul class="pagination justify-content-center align-items-center">
				<li class="page-item"><a class="page-link" href="#">Previous</a></li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">Next</a></li>
			</ul>
			<div class="row">
				<div class="col-sm-7">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Raspberry Pi Garden</h4>
							<p>9 November 2014</p>
							<img class="card-img-top" src="img/small.jpg" alt="Card image">
							<p class="card-text">I used a raspberry Pi to water my Garden</p>
							
							<a href="#" class="btn btn-primary">Blog Stuff</a>
							<a href="https://github.com/farrp2011" class="btn btn-secondary">GitHub</a>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Tic-Tac-Toe</h4>
							<p>9 November 2014</p>
							<img class="card-img-top" src="img/small.jpg" alt="Card image">
							<p class="card-text">I made a Tic-Tac-Toe game in High School</p>
							
							<a href="#" class="btn btn-primary">Blog Stuff</a>
							<a href="https://github.com/farrp2011" class="btn btn-secondary">GitHub</a>
						</div>
					</div>
				</div>
			</div> 
		
			<div class="row">
				<div class="col-sm-5">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Raspberry Pi Garden</h4>
							<p>9 November 2014</p>
							<img class="card-img-top" src="img/small.jpg" alt="Card image">
							<p class="card-text">I used a raspberry Pi to water my Garden</p>
							
							<a href="#" class="btn btn-primary">Blog Stuff</a>
							<a href="https://github.com/farrp2011" class="btn btn-secondary">GitHub</a>
						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Tic-Tac-Toe</h4>
							<p>9 November 2014</p>
							<img class="card-img-top" src="img/small.jpg" alt="Card image">
							<p class="card-text">I made a Tic-Tac-Toe game in High School</p>
							
							<a href="#" class="btn btn-primary">Blog Stuff</a>
							<a href="https://github.com/farrp2011" class="btn btn-secondary">GitHub</a>
						</div>
					</div>
				</div>
			</div>
			<br/>
			<ul class="pagination justify-content-center align-items-center">
				<li class="page-item"><a class="page-link" href="#">Previous</a></li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">Next</a></li>
			</ul>
		</div>
		
		<?php getfoot()?>
	</body>
</html>