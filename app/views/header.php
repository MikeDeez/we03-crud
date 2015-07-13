<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=url('assets/css/style.css')?>">
</head>
<body>
	<header>
		<div class="container">
			<h1>Catch 'Em All</h1>
			<nav>
				<ul>
					<? if(Auth::is_logged_in()):?>
						<li>
							<a href="<?=url('admin')?>" class="btn btn-default">Admin</a>
						</li>
						<li>
							<a href="<?=url('logout')?>" class="btn btn-default">Logout</a>
						</li>
					<?else:?>
						<li>
							<a href="<?=url('')?>" class="btn btn-default">Home</a>
						</li>
						<li>
							<a href="<?=url('login')?>" class="btn btn-default">Login</a>
						</li>
						<li>
							<a href="<?=url('register')?>" class="btn btn-default">Register</a>
						</li>
					<?endif;?>
				</ul>
			</nav>
		</div>

	</header>
