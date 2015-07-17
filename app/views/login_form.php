<div class="container">
	
	<h2>Login</h2>
	<hr>

	<?=Form::open()?>
		<div class="form-group">
			<?=Form::label('username', 'Username')?>
			<?=Form::text('username', Sticky::get('username'), [
				'class' => 'form-control',
				'id' => 'register-form'
				])

			?>
		</div>

		<div class="form-group">
			<?=Form::label('password', 'Password')?>
			<?=Form::password('password', '', [
				'class' => 'form-control',
				'id' => 'register-form'
				])
			?>
		</div>

		<div class="form-group">
			<?=Form::submit('Login',[
				'class' => 'btn btn-primary',
				'id' => 'register-form'
				])
			?>
		</div>

	<?=Form::close()?>

</div>