<?php
	require_once './controller/definitions.php';
	require_once './controller/html_fags.php';
	require_once './controller/Users.php';

	$user = new Users();
	$user->isLoggedIn($_COOKIE[COL_COOKIE]);
?>
<!DOCTYPE html>
<?php echo COPYRIGHT;?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bugged Out Code</title>
		<?php echo HEAD_STUFF ?>
	</head>
	<body>
		 <?php getNav(HOME_PAGE, $user)?>
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
					<div class="card m-1">
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
					<div class="card m-1">
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
					<div class="card m-1">
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
					<div class="card m-1">
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
