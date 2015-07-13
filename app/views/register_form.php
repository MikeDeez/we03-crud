<div class="container">
	
	<h2>Register</h2>
	<hr>

	<?=Form::open()?>
		<div class="form-group">
			<?=Form::label('username', 'Username')?>
			<?=Form::text('username', Sticky::get('username'), 
				['class' => 'form-control'])
			?>
		</div>

		<div class="form-group">
			<?=Form::label('email', 'Email')?>
			<?=Form::text('email', Sticky::get('email'), 
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
			<?=Form::submit('Register', 
				['class' => 'btn btn-primary'])
			?>
		</div>

	<?=Form::close()?>

</div>