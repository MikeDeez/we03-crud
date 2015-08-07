<div class="container">
	
	<h2>Register</h2>
	<hr>

	<?=Form::open()?>
	<?if($error): ?>
		<div class="alert alert-danger" role="alert">
			<span class="glyphicon glyphicon-remove"></span>
			<?=$error?>
		</div>
	<?endif;?>
		<div class="form-group">
			<?=Form::label('username', 'Username')?>
			<?=Form::text('username', Sticky::get('username'), 
				[
					'class' 	=> 'form-control',
					'required' 	=> 'required',
					'minlength' => 4,
					'placeholder' => 'Req.* (min. 4 characters)'
				])
			?>
		</div>

		<div class="form-group">
			<?=Form::label('email', 'Email')?>
			<?=Form::email('email', Sticky::get('email'), 
				[
					'class' 	=> 'form-control',
					'required' 	=> 'required',
					'placeholder' => 'Req.* (example@example.com)'
				])
			?>
		</div>

			<div class="form-group">
			<?=Form::label('password', 'Password')?>
			<?=Form::password('password', '', 
				[
					'class' 	=> 'form-control',
					'required' 	=> 'required',
					'minlength' =>  4,
					'placeholder' => 'Req.* (min. 4 characters)'
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