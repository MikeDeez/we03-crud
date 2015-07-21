<div class="container">
	
	<h2>Register</h2>
	<hr>

	<?=Form::open()?>
		<div class="form-group">
			<?=Form::label('username', 'Username')?>
			<?=Form::text('username', Sticky::get('username'), 
				[
					'class' 	=> 'form-control',
					'required' 	=> 'required',
					'minlength' => 4
				])
			?>
		</div>

		<div class="form-group">
			<?=Form::label('email', 'Email')?>
			<?=Form::email('email', Sticky::get('email'), 
				[
					'class' 	=> 'form-control',
					'required' 	=> 'required',
				])
			?>
		</div>

			<div class="form-group">
			<?=Form::label('password', 'Password')?>
			<?=Form::password('password', '', 
				[
					'class' 	=> 'form-control',
					'required' 	=> 'required',
					'minlength' =>  3
				])
			?>
		</div>

		<div class="form-group">
			<?=Form::submit('Register', 
				[
					'class' 	=> 'btn btn-primary',
					'required' 	=> 'required'
				])
			?>
		</div>

	<?=Form::close()?>

</div>