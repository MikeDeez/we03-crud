<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>A Blog About Nothing</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1 class="title">
				a blog about nothing
			</h1>
			<nav>
				<ul>
					<?if(Auth::is_admin()):?>
						<li>
							<a href="/" class="btn btn-link">Home</a>
						</li>
						<li>
							<a href="/admin" class="btn btn-link">Master Control</a>
						</li>
						<li>
							<a href="/logout" class="btn btn-link">Logout</a>
						</li>
					<?elseif(Auth::is_logged_in()):?>
						<li>
							<a href="/" class="btn btn-link">Home</a>
						</li>
						<li>
							<a href="/logout" class="btn btn-link">Logout</a>
						</li>
					<?else:?>
						<li>
							<a href="/" class="btn btn-link">Home</a>
						</li>
						<li>
							<a href="/login" class="btn btn-link">Login</a>
						</li>
						<li>
							<a href="/register" class="btn btn-link">Register</a>
						</li>
					<?endif;?>
				</ul>
			</nav>
		</div>
	</header>
