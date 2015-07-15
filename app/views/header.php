<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>A Blog About Nothing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1><a href="/">A blog about nothing</a></h1>
			<nav>
				<ul>
					<? if(Auth::is_logged_in()):?>
						<li>
							<a href="/admin" class="btn btn-default">Master Control</a>
						</li>
						<li>
							<a href="/logout" class="btn btn-default">Logout</a>
						</li>
					<?else:?>
						<li>
							<a href="/" class="btn btn-default">Home</a>
						</li>
						<li>
							<a href="/login" class="btn btn-default">Login</a>
						</li>
						<li>
							<a href="/register" class="btn btn-default">Register</a>
						</li>
					<?endif;?>
				</ul>
			</nav>
		</div>
	</header>
