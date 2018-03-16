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
		<title>Fun Stuff</title>
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
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">I went Hiking</h4>
							<p>9 November 2014</p>
							<img class="card-img-top" src="img/small.jpg" alt="Card image">
							<p class="card-text">I hiked to somewhere. It was a lot of fun.</p>
							<a href="#" class="btn btn-primary">Blog Stuff</a>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">I went Camping</h4>
							<p>9 November 2014</p>
							<img class="card-img-top" src="img/small.jpg" alt="Card image">
							<p class="card-text">I camped at lake angles.  It was really beautful.</p>
							<a href="#" class="btn btn-primary">Blog Stuff</a>
							
						</div>
					</div>
				</div>
			</div> 
		
			<div class="row">
				<div class="col-sm-5">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">I went Canoeing</h4>
							<p>9 November 2014</p>
							<img class="card-img-top" src="img/small.jpg" alt="Card image">
							<p class="card-text">I canoed out to Blake Island.</p>
							<a href="#" class="btn btn-primary">Blog Stuff</a>
						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">I saw the Eclipse</h4>
							<p>9 November 2014</p>
							<img class="card-img-top" src="img/small.jpg" alt="Card image">
							<p class="card-text">I was amazing.</p>
							<a href="#" class="btn btn-primary">Blog Stuff</a>
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
