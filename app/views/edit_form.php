<div class="container">
	
	<h2><?=$title?></h2>
	<hr>

	<?=Form::open()?>
		<div class="form-group">
			<?=Form::label('content', 'Content')?>
			<?=Form::textarea('content', Sticky::get('content'), 
				[
					'class' => 'form-control'
				])?>
		</div>

		<?=Form::submit('Save', 
			[
				'class' => 'btn btn-primary'
			])?>

	<?=Form::close()?>
</div>