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
		<div class="bg-primary text-white">
        <header class="bg-primary text-white" style="background-image: url('img/header.jpg'); max-width: 100%; margin: auto;">
            <div class="container text-center">
                <div class="title_box" style=" text-shadow: 2px 2px rgba(0,0,0,.4);">
                  <h1>Paul Farr</h1>
                  <p class="lead"><strong>Lets explore some code together.</strong></p>
						<p class="lead">I'm a student going to Olympic College sharing a Blog about Web-Development, Programming and the Raspberry Pi.</p>
                </div>
            </div>
        </header>
		</div>
		<br/>
		<div class="container">
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
		</div>
		<?php getfoot()?>
	</body>
</html>
