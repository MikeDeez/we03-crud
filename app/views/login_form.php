<div class="container">
	
	<h2>Login</h2>
	<hr>

	<?=Form::open()?>
		<div class="form-group">
			<?=Form::label('username', 'Username/Email')?>
			<?=Form::text('username', Sticky::get('username', 'email'), 
				[
					'class' => 'form-control',
				])

			?>
		</div>

		<div class="form-group">
			<?=Form::label('password', 'Password')?>
			<?=Form::password('password', '', 
				[
					'class' => 'form-control',
				])
			?>
		</div>


		<div class="form-group">
			<?=Form::submit('Login',
				[
					'class' => 'btn btn-primary',
				])
			?>
		</div>

	<?=Form::close()?>

</div>