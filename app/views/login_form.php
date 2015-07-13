<div class="container">
	
	<h2>Login</h2>
	<hr>

	<?=Form::open()?>
		<div class="form-group">
			<?=Form::label('username', 'Username')?>
			<?=Form::text('username', Sticky::get('username'), 
				['class' => 'form-control'])
			?>
		</div>

		<div class="form-group">
			<?=Form::label('password', 'Password')?>
			<?=Form::password('password', '', 
				['class' => 'form-control'])
			?>
		</div>

		<div class="form-group">
			<?=Form::submit('Login', 
				['class' => 'btn btn-primary'])
			?>
		</div>

	<?=Form::close()?>

</div>